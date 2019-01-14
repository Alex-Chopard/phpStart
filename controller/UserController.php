<?php

class UserController {

    public static function list () : array {
        $users = [];
        if ($query = Db::getInstance()->query('SELECT * FROM user;')) {
            while ($user = $query->fetch_assoc()) {
                $newUser = new User($user['idUser'], $user['firstName'], $user['lastName'], $user['email'], $user['address']);
                $users[] = $newUser;
            }
            $query->close();

        }
        return $users;
    }

    public static function create (string $firstName, string $lastName, string $email, string $address) {
        if (is_null($firstName) || is_null($lastName) || is_null($email) || is_null($address)) {
            throw new Exception('One or more value(s) are null !');
        }

        if ($stmt = Db::getInstance()->prepare("INSERT INTO user (firstName, lastName, email, address) values (?, ?, ?, ?);")) {
            $stmt->bind_param("ssss", $firstName, $lastName, $email, $address);

            return !!($query = $stmt->execute());
        }

        return false;
    }

    public static function search () {
    }

    public static function read () {
    }

    public static function update () {
    }

    public static function delete () {
    }
}