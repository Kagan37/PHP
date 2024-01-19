<?php
class Logger {
    private static $instance;
    private $logMessages = [];
    private function __construct() {
    }
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Logger();
        }
        return self::$instance;
    }
    public function logMessage($message) {
        $this->logMessages[] = $message;
    }
    public function getLogMessages() {
        return $this->logMessages;
    }
}
$logger1 = Logger::getInstance();
$logger2 = Logger::getInstance();
$logger1->logMessage("Wiadomość 1 od logger1");
$logger2->logMessage("Wiadomość 2 od logger2");
$logMessagesFromLogger1 = $logger1->getLogMessages();
$logMessagesFromLogger2 = $logger2->getLogMessages();
echo "Wiadomości z logger1:<br>";
foreach ($logMessagesFromLogger1 as $message) {
    echo "- $message<br>";
}
echo "<br>Wiadomości z logger2:<br>";
foreach ($logMessagesFromLogger2 as $message) {
    echo "- $message<br>";
}

