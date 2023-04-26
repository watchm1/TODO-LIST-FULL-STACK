<?php
namespace Core\Utils\Constants;
enum HttpCodes:int {
    case OK = 200;
    case CREATED = 201;
    case ACCEPTED = 202;
    case NON_AUTHORITATIVE_INFO = 203;
    case NO_CONTENT = 204;
    case RESET_CONTENT = 205;
    case ALREADY_REPORTED = 208;
    case FOUND = 302;
    case NOT_MODIFIED = 304;
    case BAD_REQUEST = 400;
    case UNAUTHORIZED = 401;
    case PAYMENT_REQUIRED = 402;
    case FORBIDDEN = 403;
    case NOT_FOUND = 404;
    case METHOD_NOT_ALLOWED = 405;
    case REQUEST_TIMEOUT = 408;
    case CONFLICT = 409;
    case UPGRADE_REQUIRED = 426;
    case TOO_MANY_REQUESTS = 429;
    case INTERNAL_SERVER_ERROR = 500;
    case NOT_IMPLEMENTED = 501;
    case BAD_GATEWAY = 502;
    case SERVICE_UNAVAILABLE = 503;
    case GATEWAY_TIMEOUT = 504;
    case NETWORK_AUTHENTICATION_REQUIRED = 511;

}
enum REQUIREMENTS: string {
    case LOGIN_REQUIRED = "TO_LOGIN_PAGE";
    case OTP_REQUIRED = "TO_OTP_PAGE";
    case DISPATCH = "DISPATCH_ALLOWED_GET_METHOD";
    case HOME = "TO_HOME_PAGE";
}

enum LogType: string {
    case INFO = "INFO";
    case WARNING = "WARNING";
    case ERROR = "ERROR";
    case DEBUG = "DEBUG";
    case CONSOLE = "CONSOLE";
}