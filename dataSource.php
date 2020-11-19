<?php
class DataSource
{
    const server = "localhost";
    const dbUserName = "root";
    const dbPassword = "";
    const dbName = "blog";
    public object $conn;
    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getConnection()
    {
        $conn = new mysqli(self::server, self::dbUserName, self::dbPassword, self::dbName);

        if (mysqli_connect_errno()) {
            trigger_error("Problem with connecting to database.");
        }

        $conn->set_charset("utf8");
        return $conn;
    }

    public function select($query, $paramType="", $paramArray=array())
    {
        $stmt = $this->conn->prepare($query);

        if(!empty($paramType) && !empty($paramArray)) {
            $this->bindQueryParams($stmt, $paramType, $paramArray);
        }
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $resultSet[] = $row;
            }
        }

        if (! empty($resultSet)) {
            return $resultSet;
        }else{
            return 0;
        }
    }


    private function bindQueryParams($stmt, $paramType, $paramArray)
    {
        $paramValueReference[] = & $paramType;
        for ($i = 0; $i < count($paramArray); $i++){
            $paramValueReference[] = & $paramArray[$i];
        }
        call_user_func_array(array(
            $stmt,
            'bind_param'
        ), $paramValueReference);
    }



}
