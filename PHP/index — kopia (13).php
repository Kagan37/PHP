<?php

class Logger {
    private static $logCount = 0;

    public static function logMessage($message) {
        echo "Log #".(++self::$logCount).": $message<br>";
    }

    public static function getLogCount() {
        return self::$logCount;
    }
}
Logger::logMessage("To jest pierwsza wiadomość logu.");
Logger::logMessage("To jest druga wiadomość logu.");

echo "Liczba zarejestrowanych wiadomości: " . Logger::getLogCount() . "<br>";

?>
