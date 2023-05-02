<?php

namespace Core\Service\LoggerService;
use Core\Utils\Constants as constants;
use Exception;


class Logger implements ILogger
{
    private string $ErrorLogFileName;
    private string $InfoLogFile;
    private string $WarnLogFile;
    public function __construct(string $errorFileName, string $infoFileName, string $warnFileName)
    {
        $this->ErrorLogFileName = $errorFileName;
        $this->InfoLogFile = $infoFileName;
        $this->WarnLogFile = $warnFileName;
    }
    function CheckFileExists($filePath):bool
    {
        if(file_exists($filePath))
            return true;
        else {
            try {
                $file = fopen($filePath, 'a');
                fclose($file);
                return true;
            } catch (Exception $e) {
                echo $e->getMessage();
                return false;
            }
        }
    }
    function LogInfo(string $message): void
    {
        $logType = constants\LogType::INFO->value;
        $logMessage = "[".date('Y-m-d H:i:s')."] [$logType] ".$message;
        if($this->CheckFileExists($this->InfoLogFile))
        {
            file_put_contents($this->InfoLogFile,$logMessage, FILE_APPEND);
            $this->LogToConsole($logMessage);
        }
    }
    function LogError(string $message): void
    {
        $logType = constants\LogType::ERROR->value;
        $logMessage = "[".date('Y-m-d H:i:s')."] [$logType] ".$message;
        if($this->CheckFileExists($this->ErrorLogFileName))
        {
            file_put_contents($this->ErrorLogFileName,$logMessage, FILE_APPEND);
            $this->LogToConsole($logMessage);
        }
    }
    function LogWarning(string $message): void
    {
        $logType = constants\LogType::WARNING->value;
        $logMessage = "[".date('Y-m-d H:i:s')."] [$logType] ".$message;
        if($this->CheckFileExists($this->WarnLogFile))
        {
            file_put_contents($this->WarnLogFile,$logMessage, FILE_APPEND);
            $this->LogToConsole($logMessage);
        }
    }
    function LogDebug(string $message): void
    {
        $logType = constants\LogType::DEBUG->value;
        $logMessage = "[".date('Y-m-d H:i:s')."] [$logType] ".$message;
        $this->LogToConsole($logMessage);
    }
    function LogToConsole(string $message): void
    {
        print($message);
    }
}