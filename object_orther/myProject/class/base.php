<?php


class DB
{
    public $name;
    protected $table;
    protected $conn;

    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=db15";

    public function __construct($table)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db0722";

        $this->table = $table;
        $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }


    // public function __construct($table)
    // {
    //     $servername = "localhost";
    //     $username = "root";
    //     $password = "";
    //     $dbname = "db0722";



    //     $this->conn = new PDO($servername, $username, $password, $dbname);
    //     $this->table = $table;
    //     // echo "Hello new $table";
    // }

    protected function getAll()
    {
        $sql = "SELECT * FROM $this->table";
        // $data =  $this->conn->query($sql)->fetch_all(MYSQLI_ASSOC);
        $data =  $this->conn->query($sql)->fetchAll(2);
        // dd($data);
        return $data;
    }

    public function getAllSetRank()
    {
        $sql = "SELECT * FROM $this->table";
        $data =  $this->conn->query($sql)->fetchAll(2);
        // dd($data);
        // $data = $this->getAll();
        $tmp = $data;
        foreach ($data as $key => $value) {
            if ($value['id'] >= 5) {
                $tmp[$key]['rank'] = 2;
            } else {
                $tmp[$key]['rank'] = 1;
            }
        }
        // dd($tmp);

        return $tmp;
    }

    public function getByID($id)
    {

        $sql = "SELECT * FROM $this->table WHERE id = $id";
        $data =  $this->conn->query($sql)->fetch(2);
        // dd($data);
        // $data = $this->getAll();
        $tmp = $data;
        if ($data['id'] >= 5) {
            $tmp['rank'] = 2;
        } else {
            $tmp['rank'] = 1;
        }
        // dd($tmp);

        return $tmp;
    }


    public function setRank()
    {
        $data = $this->getAll();
        $tmp = $data;
        foreach ($data as $key => $value) {
            if ($value['id'] >= 5) {
                $tmp[$key]['rank'] = 2;
            } else {
                $tmp[$key]['rank'] = 1;
            }
        }
        // dd($tmp);
        return $tmp;
    }

    // add
    public function store($data)
    {
        $data['name'] = $data['name'];

        $sql = "
        INSERT INTO
            `$this->table` (`id`, `name`, `mobile`)
        VALUES
            (NULL, '{$data['name']}', '{$data['mobile']}');
        ";
        // dd($sql);

        // Array
        // (
        //     [name] => aaa
        //     [mobile] => 123
        // )


        $this->conn->exec($sql);
        // header('Location: http://localhost');
        // exit();
    }

    // update
    public function update($data)
    {
        // dd('hello update');
        // dd($data);
        // Array
        // (
        //     [name] => cat
        //     [mobile] => 0933-333-333
        //     [id] => 3
        // )

        $id = $data['id'];


        $sql = "UPDATE
                    `$this->table`
                SET
                    `name` = '{$data['name']}',
                    `mobile` = '{$data['mobile']}'
                WHERE
                    `$this->table`.`id` = $id;";

        // dd($sql);


        $this->conn->exec($sql);
        header('Location: http://localhost');
        exit();
    }

    // del
    public function del($id)
    {
        $sql = "DELETE FROM $this->table WHERE `$this->table`.`id` = $id";
        $this->conn->exec($sql);
        header('Location: http://localhost');
        exit();
    }

    // add
    public function rollbackFun()
    {
        $sql = "TRUNCATE TABLE `db0722`.`$this->table`";
        $this->conn->query($sql);

        $sql = "INSERT INTO
                    `$this->table` (`id`, `name`, `mobile`)
                VALUES
                    (NULL, 'amy', '0911-111-111'),
                    (NULL, 'bob', '0922-222-222'),
                    (NULL, 'cat', '0933-333-333'),
                    (NULL, 'dog', '0944-444-444');";
        $data = $this->conn->exec($sql);
        // $data = $this->conn->query($sql);
        // dd($data);

        header('Location: http://localhost');
        exit();
    }
}





function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
