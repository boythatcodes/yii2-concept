<?php
// commands/SeedController.php
namespace app\commands;

use yii\console\Controller;
use yii\db\Query;
use yii\base\Security;

class SeedController extends Controller
{
    public function actionIndex()
    {
        $current_date = date("Y-m-d H:i:s");
        echo "Start seeding at $current_date \n";

        echo "Seeding User! \n";
        $rows = (new Query())
            ->select(['id'])
            ->from('users')
            ->where(['email' => 'admin@admin.com'])
            ->count();

        if(empty($rows)){
            echo "Making Admin! \n";
            $sec = new Security();
            $rows = (new Query())
            ->createCommand()->insert('users', [
                'email' => 'admin@admin.com',
                "password"=> $sec->generatePasswordHash("admin"),
                "auth_key" =>$sec->generateRandomString(12),
                "access_token" => $sec->generateRandomString(12),
                "pets" => "[1,2,3]",
                'created_at' => $current_date,
            ])->execute();
        }else{
            echo "Base Users Exists! \n";
        }
        echo "Seeding Pets \n";

        $pets_count = (new Query())
            ->select(['id'])
            ->from('pets')
            ->count();

        if(empty($pets_count)){
            echo "Adding Pets!! \n";
            $pets_creation = (new Query())
                ->createCommand()->batchInsert('pets', ["name", "status", "location", "imageFile", "created_at"], [
                    [ "parrot", 1, "Nepal", "https://www.mylokalfresh.com/uploads/parrot.jpg", $current_date],
                    [ "cat", 1, "Pokhara", "https://www.mylokalfresh.com/uploads/cat.jpg", $current_date],
                    [ "dog-abc-1", 1, "Nuwakot", "https://www.mylokalfresh.com/uploads/dog2.jpg", $current_date],
                    [ "cat-abc", 1, "thamel", "https://www.mylokalfresh.com/uploads/cat2.png", $current_date],
                    [ "cat-1", 1, "Everest", "https://www.mylokalfresh.com/uploads/cat.jpg", $current_date],
                    [ "cat-2", 1, "Lumbini", "https://www.mylokalfresh.com/uploads/cat2.png", $current_date],
                    [ "dog-abc", 1, "Nagarkot", "https://www.mylokalfresh.com/uploads/dog.jpg", $current_date]
                ])->execute();
        }else{
            echo "Base Pets Exists! \n";
        }
    }
}