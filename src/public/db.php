<?php
class Database {
    private static $pdo = null;
    
    private static function connect() {
        if (self::$pdo === null) {
            $host = 'db';
            $port = '5432';
            $dbname = 'myapp';
            $user = 'postgres';
            $password = 'secret';
            
            $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";
            
            try {
                self::$pdo = new PDO($dsn);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }
        }
        return self::$pdo;
    }
    
    // Simple query method for SELECT statements
    public static function query($sql) {
        $pdo = self::connect();
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // Execute method for INSERT, UPDATE, DELETE
    public static function execute($sql) {
        $pdo = self::connect();
        return $pdo->exec($sql);
    }
}
?>