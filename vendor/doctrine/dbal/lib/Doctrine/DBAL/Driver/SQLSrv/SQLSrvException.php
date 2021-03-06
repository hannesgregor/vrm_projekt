<?php

namespace Doctrine\DBAL\Driver\SQLSrv;

use Doctrine\DBAL\Driver\AbstractDriverException;

use function rtrim;
use function sqlsrv_errors;

use const SQLSRV_ERR_ERRORS;

/**
 * @psalm-immutable
 */
class SQLSrvException extends AbstractDriverException
{
    /**
     * Helper method to turn sql server errors into exception.
     *
     * @return SQLSrvException
     */
    public static function fromSqlSrvErrors()
    {
        $message   = '';
        $sqlState  = null;
        $errorCode = null;

        foreach ((array) sqlsrv_errors(SQLSRV_ERR_ERRORS) as $error) {
            $message .= 'SQLSTATE [' . $error['SQLSTATE'] . ', ' . $error['code'] . ']: ' . $error['message'] . "\n";

            if ($sqlState === null) {
                $sqlState = $error['SQLSTATE'];
            }

            if ($errorCode !== null) {
                continue;
            }

            $errorCode = $error['code'];
        }

        if (! $message) {
            $message = 'SQL Server error occurred but no error message was retrieved from driver.';
        }

        return new self(rtrim($message), $sqlState, $errorCode);
    }
}
