<?php

/* 返回状态值
 * created by vim
 * user Peter.R.Orpheus
 * time 2019-10-14 18:19
 */


namespace App\Cons;

class RestCode 
{
    // 成功 200
    const SUCCESS = 200;
    const OBJECT_CREATED = 201;
    const OBJECT_NO_CONTENT = 204;
    const OBJECT_PARTIAL_CONTENT = 206;
    const OBJECT_BAD_REQUEST = 400;
    const OBJECT_UNAUTHORIZED = 401;
    const OBJECT_FORBIDDEN = 403;
    const OBJECT_NOT_FOUND = 404;
    const OBJECT_INTERNAL_SERVER_ERROR = 500;
    const OBJECT_SERVICE_UNAVAILABLE = 503;

    // array
    const SHOW_SUCCESS  = [self::SUCCESS, 'OK'];
    const SHOW_OBJECT_CREATED  = [self::OBJECT_CREATED, 'Object created'];
    const SHOW_OBJECT_NO_CONTENT  = [self::NO_CONTENT, 'No content'];
    const SHOW_OBJECT_PARTIAL_CONTENT  = [self::OBJECT_PARTIAL_CONTENT, 'Partial content'];
    const SHOW_BAD_REQUEST  = [self::BAD_REQUEST, 'Bad request'];
    const SHOW_OBJECT_UNAUTHORIZED  = [self::OBJECT_UNAUTHORIZED, 'Unauthorized'];
    const SHOW_OBJECT_FORBBIDEN  = [self::OBJECT_FORBBIDEN, 'Forbidden'];
    const SHOW_OBJECT_NOT_FOUND  = [self::OBJECT_NOT_FOUND, 'Not found'];
    const SHOW_OBJECT_INTERNAL_SERVER_ERROR  = [self::OBJECT_INTERNAL_SERVER_ERROR, 'Internal server error'];
    const SHOW_OBJECT_SERVICE_UNAVAILABLE  = [self::OBJECT_SERVICE_UNAVAILABLE, 'Service unavailable'];

}






