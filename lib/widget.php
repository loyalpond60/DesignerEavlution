<?php
require('vendor/autoload.php');

abstract class Widget
{
    abstract public function draw();
}

class TestWidget extends Widget
{
    public function draw(){
        return $this->msg();
    }

    private function msg(){
        $msg=<<<HTML
        TEST
HTML;
        return $msg;
    }
}
class OrderListWidget extends Widget
{
    public function draw(){
        return $this->msg();
    }

    private function msg(){
        $msg="";
        $system=new System;
        $result=$system->get_OrderList();
        $msg.="
        <table border='1'>
            <thead>
                <tr>
                    <th>單號</th>
                    <th>案件名稱</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            ";
        foreach($result as $row){
            $msg.=<<<HTML
            <tr>
                <td>{$row["orderNum"]}</td>
                <td>{$row["name"]}</td>
                <td><a href="Order.php?order={$row["orderNum"]}">編輯</a></td>
            </tr>
HTML;
        }
        $msg.="</tbody></table>";
        return $msg;
    }
}
class OrderWidget extends Widget
{
    public function draw(){
        return $this->msg();
    }

    private function msg(){
        $msg=<<<HTML
            <a href="Hydroelectric.php?order={$_GET['order']}">水電工程</a><br>
            <a href=".php">防護工程（x）</a><br>
            <a href=".php">系統工程（x）</a><br>
            <a href=".php">其他工程（x）</a>
HTML;
        return $msg;
    }
}
class HydroelectricWidget extends Widget
{
    public function draw(){
        return $this->msg();
    }
    private function msg(){
        $msg=$this->addRoomWidget();
        $msg.=$this->setRoomCeilingTable();
        $msg.=$this->setRoomFloorTable();

        return $msg;
    }
    private function addRoomWidget(){
        $msg=<<<HTML
            <h1>水電工程專區</h1>
            <hr>
            <h2>新增房間</h2>
            ＊ 若下方表格缺少可填房間資料，請填寫新增。
            <form action='addRoom.php' method='post'>
                <input type="hidden" name="order" value="{$_GET['order']}">
                房間名稱：<input type="text" name="roomName">
                <input type="submit" value="新增">
            </form><br>

HTML;
    return $msg;
    }
    private function setRoomCeilingTable(){
        $msg=<<<HTML

        <form action='setRoomCeiling.php' method="post">
            <hr>
            <h2>填寫尺寸</h2>
            <h3>天花板</h3>
            <table border="1">
                <thead>
                    <tr>
                        <th>位置</th>
                        <th>長度</th>
                        <th>寬度</th>
                        <th>m^2</th>
                        <th>P</th>
                    </tr>
                </thead>
                <tbody>
HTML;
        $order=new Hydroelectric;
        $roomList=$order->getRoom();
        $itemValue=$order->getItem("Ceiling",$_GET['order']);

        foreach ($roomList as $row) {
            $msg.="
            <tr>
                <td>{$row['name']}</td>
                <td><input type='text' name='{$row['id']}_length'></td>
                <td><input type='text' name='{$row['id']}_width'></td>
            ";
            foreach ($itemValue as $item) {
                if($item->getRoomNum()==$row['id']){
                    $msg.= "<td>{$item->getLength()}</td>";
                    $msg.= "<td>{$item->getWidth()}</td>";
                }
            }
            $msg.="
            </tr>
            ";
        }
        $msg.="
                <tr>
                    <td><input type='submit' value='送出'></td>
                </tr>
            </form>
        </table>";
        return $msg;
    }
    private function setRoomFloorTable(){
        $msg=<<<HTML

        <form action='setRoomFloor.php' method="post">
            <hr>
            <h2>填寫尺寸</h2>
            <h3>木地板</h3>
            <table border="1">
                <thead>
                    <tr>
                        <th>位置</th>
                        <th>長度</th>
                        <th>寬度</th>
                        <th>m^2</th>
                        <th>P</th>
                    </tr>
                </thead>
                <tbody>
HTML;
        $order=new Hydroelectric;
        $roomList=$order->getRoom();
        $itemValue=$order->getItem("Floor",$_GET['order']);

        foreach ($roomList as $row) {
            $msg.="
            <tr>
                <td>{$row['name']}</td>
                <td><input type='text' name='{$row['id']}_length'></td>
                <td><input type='text' name='{$row['id']}_width'></td>
            ";
            foreach ($itemValue as $item) {
                if($item->getRoomNum()==$row['id']){
                    $msg.= "<td>{$item->getLength()}</td>";
                    $msg.= "<td>{$item->getWidth()}</td>";
                }
            }
            $msg.="
            </tr>
            ";
        }
        $msg.="
                <tr>
                    <td><input type='submit' value='送出'></td>
                </tr>
            </form>
        </table>";
        return $msg;
    }
    private function setRoomItemTable(){
        $msg=<<<HTML

        <form action='setRoomFloor.php' method="post">
            <hr>
            <h2>填寫尺寸</h2>
            <h3>木地板</h3>
            <table border="1">
                <thead>
                    <tr>
                        <th>位置</th>
                        <th>長度</th>
                        <th>寬度</th>
                        <th>m^2</th>
                        <th>P</th>
                    </tr>
                </thead>
                <tbody>
HTML;
        $order=new Hydroelectric;
        $roomList=$order->getRoom();
        $itemValue=$order->getItem("Floor",$_GET['order']);

        foreach ($roomList as $row) {
            $msg.="
            <tr>
                <td>{$row['name']}</td>
                <td><input type='text' name='{$row['id']}_length'></td>
                <td><input type='text' name='{$row['id']}_width'></td>
            ";
            foreach ($itemValue as $item) {
                if($item->getRoomNum()==$row['id']){
                    $msg.= "<td>{$item->getLength()}</td>";
                    $msg.= "<td>{$item->getWidth()}</td>";
                }
            }
            $msg.="
            </tr>
            ";
        }
        $msg.="
                <tr>
                    <td><input type='submit' value='送出'></td>
                </tr>
            </form>
        </table>";
        return $msg;
    }
}
 ?>
