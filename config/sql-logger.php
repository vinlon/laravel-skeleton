<?php

return [
    /*
     * 是否开启All Query Log (建议在开发和测试环境开启，在生产环境关闭)
     */
    'all_query_enabled' => env('SQL_LOGGER_ALL_QUERY_ENABLED', true),

    /*
     * 是否开启Slow Query Log (如果没有专门的DBA对数据库进行监控和管理的话，建议在生产环境打开)
     */
    'slow_query_enabled' => env('SQL_LOGGER_SLOW_QUERY_ENABLED', true),

    /*
     * 默认执行时间超过1000ms记为慢查询
     * 单位：ms
     */
    'slow_query_threshold' => env('SQL_LOGGER_SLOW_QUERY_THRESHOLD', 1000),

    /*
     * All Query Log 使用的Log Channel
     */
    'all_query_log_channel' => env('SQL_LOGGER_ALL_QUERY_LOG_CHANNEL', null),

    /*
     * Slow Query Log 使用的Log Channel
     */
    'slow_query_log_channel' => env('SQL_LOGGER_SLOW_QUERY_LOG_CHANNEL', null),
];
