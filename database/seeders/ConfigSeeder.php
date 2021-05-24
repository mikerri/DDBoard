<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Cache;
use App\Models\Config;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 설정 캐시 등록
        $configNames = [
            'homepage', 'board', 'join', 'sns', 'extra'
        ];
        foreach($configNames as $configName) {
            $this->registerConfigCache($configName);
        }
    }

    private function registerConfigCache($configName)
    {
        if(!Cache::has("config.$configName")) {
            Cache::forever("config.$configName", $this->getConfigByOne($configName));
        }
    }

    private function getConfigByOne($configName)
    {
        $configModel = new Config(); // 캐시에 저장할 때만 객체 생성
        $config = Config::where('name', 'config.'. $configName)->first();
        if(is_null($config)) {
            $config = $configModel->createConfigByOne($configName);
        }
        return $configModel->getConfigJson($config);
    }
}
