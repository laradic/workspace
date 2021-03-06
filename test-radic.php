array (
  '*::laradic_config.loader' => 'db',
  '*::laradic_config.loaders.file.save_path' => '/mnt/safe/laradic/workspace/storage/laradic_config',
  '*::laradic_config.loaders.db.table' => 'config',
  '*::laradic_config.console' => false,
  '*::services.mailgun.domain' => '',
  '*::services.mailgun.secret' => '',
  '*::services.mandrill.secret' => '',
  '*::services.ses.key' => '',
  '*::services.ses.secret' => '',
  '*::services.ses.region' => 'us-east-1',
  '*::services.stripe.model' => 'User',
  '*::services.stripe.secret' => '',
  '*::hashids.default' => 'main',
  '*::hashids.connections.main.salt' => 'F28F86043514AEB26943F1A67F21B94251201F322199855F1DF1B982E3CF7C92',
  '*::hashids.connections.main.length' => 6,
  '*::hashids.connections.main.alphabet' => 'abcdefghijklmnopqrstuvwxyz1234567890',
  '*::hashids.connections.alternative.salt' => 'your-salt-string',
  '*::hashids.connections.alternative.length' => 'your-length-integer',
  '*::hashids.connections.alternative.alphabet' => 'your-alphabet-string',
  '*::view.paths.0' => '/mnt/safe/laradic/workspace/resources/views',
  '*::view.compiled' => '/mnt/safe/laradic/workspace/storage/framework/views',
  '*::session.driver' => 'redis',
  '*::session.lifetime' => 120,
  '*::session.expire_on_close' => false,
  '*::session.encrypt' => false,
  '*::session.files' => '/mnt/safe/laradic/workspace/storage/framework/sessions',
  '*::session.connection' => 'default',
  '*::session.table' => 'sessions',
  '*::session.lottery.0' => 2,
  '*::session.lottery.1' => 100,
  '*::session.cookie' => 'laravel_session',
  '*::session.path' => '/',
  '*::session.domain' => NULL,
  '*::session.secure' => false,
  '*::auth.driver' => 'eloquent',
  '*::auth.model' => 'App\\User',
  '*::auth.table' => 'users',
  '*::auth.password.email' => 'emails.password',
  '*::auth.password.table' => 'password_resets',
  '*::auth.password.expire' => 60,
  '*::ide-helper.filename' => '_ide_helper',
  '*::ide-helper.format' => 'php',
  '*::ide-helper.include_helpers' => true,
  '*::ide-helper.helper_files.0' => '/mnt/safe/laradic/workspace/vendor/laravel/framework/src/Illuminate/Support/helpers.php',
  '*::ide-helper.helper_files.1' => '/mnt/safe/laradic/workspace/extensions/laradic/admin/src/helpers.php',
  '*::ide-helper.model_locations.0' => 'app',
  '*::ide-helper.model_locations.1' => 'extensions/laradic-admin/attributes/src/Models',
  '*::ide-helper.extra.Eloquent.0' => 'Illuminate\\Database\\Eloquent\\Builder',
  '*::ide-helper.extra.Eloquent.1' => 'Illuminate\\Database\\Query\\Builder',
  '*::ide-helper.extra.Session.0' => 'Illuminate\\Session\\Store',
  '*::ide-helper.magic.Log.debug' => 'Monolog\\Logger::addDebug',
  '*::ide-helper.magic.Log.info' => 'Monolog\\Logger::addInfo',
  '*::ide-helper.magic.Log.notice' => 'Monolog\\Logger::addNotice',
  '*::ide-helper.magic.Log.warning' => 'Monolog\\Logger::addWarning',
  '*::ide-helper.magic.Log.error' => 'Monolog\\Logger::addError',
  '*::ide-helper.magic.Log.critical' => 'Monolog\\Logger::addCritical',
  '*::ide-helper.magic.Log.alert' => 'Monolog\\Logger::addAlert',
  '*::ide-helper.magic.Log.emergency' => 'Monolog\\Logger::addEmergency',
  '*::ide-helper.interfaces.\\Illuminate\\Contracts\\Auth\\Authenticatable' => 'App\\User',
  '*::database.fetch' => 8,
  '*::database.default' => 'mysql',
  '*::database.connections.sqlite.driver' => 'sqlite',
  '*::database.connections.sqlite.database' => '/mnt/safe/laradic/workspace/storage/database.sqlite',
  '*::database.connections.sqlite.prefix' => '',
  '*::database.connections.mysql.driver' => 'mysql',
  '*::database.connections.mysql.host' => 'localhost',
  '*::database.connections.mysql.database' => 'laradic',
  '*::database.connections.mysql.username' => 'root',
  '*::database.connections.mysql.password' => 'test',
  '*::database.connections.mysql.charset' => 'utf8',
  '*::database.connections.mysql.collation' => 'utf8_unicode_ci',
  '*::database.connections.mysql.prefix' => '',
  '*::database.connections.mysql.strict' => false,
  '*::database.connections.pgsql.driver' => 'pgsql',
  '*::database.connections.pgsql.host' => 'localhost',
  '*::database.connections.pgsql.database' => 'laradic',
  '*::database.connections.pgsql.username' => 'root',
  '*::database.connections.pgsql.password' => 'test',
  '*::database.connections.pgsql.charset' => 'utf8',
  '*::database.connections.pgsql.prefix' => '',
  '*::database.connections.pgsql.schema' => 'public',
  '*::database.connections.sqlsrv.driver' => 'sqlsrv',
  '*::database.connections.sqlsrv.host' => 'localhost',
  '*::database.connections.sqlsrv.database' => 'laradic',
  '*::database.connections.sqlsrv.username' => 'root',
  '*::database.connections.sqlsrv.password' => 'test',
  '*::database.connections.sqlsrv.prefix' => '',
  '*::database.migrations' => 'migrations',
  '*::database.redis.cluster' => false,
  '*::database.redis.default.host' => '127.0.0.1',
  '*::database.redis.default.port' => 6379,
  '*::database.redis.default.database' => 0,
  '*::queue.default' => 'beanstalkd',
  '*::queue.connections.sync.driver' => 'sync',
  '*::queue.connections.database.driver' => 'database',
  '*::queue.connections.database.table' => 'jobs',
  '*::queue.connections.database.queue' => 'default',
  '*::queue.connections.database.expire' => 60,
  '*::queue.connections.beanstalkd.driver' => 'beanstalkd',
  '*::queue.connections.beanstalkd.host' => 'localhost',
  '*::queue.connections.beanstalkd.queue' => 'default',
  '*::queue.connections.beanstalkd.ttr' => 60,
  '*::queue.connections.sqs.driver' => 'sqs',
  '*::queue.connections.sqs.key' => 'your-public-key',
  '*::queue.connections.sqs.secret' => 'your-secret-key',
  '*::queue.connections.sqs.queue' => 'your-queue-url',
  '*::queue.connections.sqs.region' => 'us-east-1',
  '*::queue.connections.iron.driver' => 'iron',
  '*::queue.connections.iron.host' => 'mq-aws-us-east-1.iron.io',
  '*::queue.connections.iron.token' => 'your-token',
  '*::queue.connections.iron.project' => 'your-project-id',
  '*::queue.connections.iron.queue' => 'your-queue-name',
  '*::queue.connections.iron.encrypt' => true,
  '*::queue.connections.redis.driver' => 'redis',
  '*::queue.connections.redis.queue' => 'default',
  '*::queue.connections.redis.expire' => 60,
  '*::queue.failed.database' => 'mysql',
  '*::queue.failed.table' => 'failed_jobs',
  '*::filesystems.default' => 'local',
  '*::filesystems.cloud' => 's3',
  '*::filesystems.disks.local.driver' => 'local',
  '*::filesystems.disks.local.root' => '/mnt/safe/laradic/workspace/storage/app',
  '*::filesystems.disks.s3.driver' => 's3',
  '*::filesystems.disks.s3.key' => 'your-key',
  '*::filesystems.disks.s3.secret' => 'your-secret',
  '*::filesystems.disks.s3.region' => 'your-region',
  '*::filesystems.disks.s3.bucket' => 'your-bucket',
  '*::filesystems.disks.rackspace.driver' => 'rackspace',
  '*::filesystems.disks.rackspace.username' => 'your-username',
  '*::filesystems.disks.rackspace.key' => 'your-key',
  '*::filesystems.disks.rackspace.container' => 'your-container',
  '*::filesystems.disks.rackspace.endpoint' => 'https://identity.api.rackspacecloud.com/v2.0/',
  '*::filesystems.disks.rackspace.region' => 'IAD',
  '*::sentinel.registration' => true,
  '*::sentinel.require_activation' => true,
  '*::sentinel.allow_usernames' => true,
  '*::sentinel.default_user_groups.0' => 'Users',
  '*::sentinel.default_permissions.0' => 'admin',
  '*::sentinel.default_permissions.1' => 'users',
  '*::sentinel.additional_user_fields.first_name' => 'alpha_spaces',
  '*::sentinel.additional_user_fields.last_name' => 'alpha_spaces',
  '*::sentinel.subjects.welcome' => 'Account Registration Confirmation',
  '*::sentinel.subjects.reset_password' => 'Password Reset Confirmation',
  '*::sentinel.routes_enabled' => false,
  '*::sentinel.routing.session_store.route' => 'home',
  '*::sentinel.routing.session_destroy.route' => 'sentinel.session.create',
  '*::sentinel.routing.registration_complete.route' => 'home',
  '*::sentinel.routing.registration_activated.route' => 'home',
  '*::sentinel.routing.registration_resend.route' => 'home',
  '*::sentinel.routing.registration_reset_triggered.route' => 'home',
  '*::sentinel.routing.registration_reset_invalid.route' => 'home',
  '*::sentinel.routing.registration_reset_complete.route' => 'home',
  '*::sentinel.routing.users_invalid.route' => 'home',
  '*::sentinel.routing.users_store.route' => 'sentinel.users.index',
  '*::sentinel.routing.users_update.route' => 'sentinel.users.show',
  '*::sentinel.routing.users_update.parameters.user' => 'hash',
  '*::sentinel.routing.users_destroy.route' => 'sentinel.users.index',
  '*::sentinel.routing.users_change_password.route' => 'sentinel.users.show',
  '*::sentinel.routing.users_change_password.parameters.user' => 'hash',
  '*::sentinel.routing.users_change_memberships.route' => 'sentinel.users.show',
  '*::sentinel.routing.users_change_memberships.parameters.user' => 'hash',
  '*::sentinel.routing.users_suspend.route' => 'sentinel.users.index',
  '*::sentinel.routing.users_unsuspend.route' => 'sentinel.users.index',
  '*::sentinel.routing.users_ban.route' => 'sentinel.users.index',
  '*::sentinel.routing.users_unban.route' => 'sentinel.users.index',
  '*::sentinel.routing.groups_store.route' => 'sentinel.groups.index',
  '*::sentinel.routing.groups_update.route' => 'sentinel.groups.index',
  '*::sentinel.routing.groups_destroy.route' => 'sentinel.groups.index',
  '*::sentinel.routing.profile_change_password.route' => 'sentinel.profile.show',
  '*::sentinel.routing.profile_update.route' => 'sentinel.profile.show',
  '*::sentinel.views_enabled' => true,
  '*::sentinel.layout' => 'theme::layout',
  '*::compile.files.0' => '/mnt/safe/laradic/workspace/app/Providers/AppServiceProvider.php',
  '*::compile.files.1' => '/mnt/safe/laradic/workspace/app/Providers/BusServiceProvider.php',
  '*::compile.files.2' => '/mnt/safe/laradic/workspace/app/Providers/ConfigServiceProvider.php',
  '*::compile.files.3' => '/mnt/safe/laradic/workspace/app/Providers/EventServiceProvider.php',
  '*::compile.files.4' => '/mnt/safe/laradic/workspace/app/Providers/RouteServiceProvider.php',
  '*::throttle.driver' => NULL,
  '*::radic_themes.debug' => false,
  '*::radic_themes.active' => 'frontend/default',
  '*::radic_themes.default' => 'frontend/default',
  '*::radic_themes.fallback' => NULL,
  '*::radic_themes.assetClass' => '\\Laradic\\Themes\\Assets\\Asset',
  '*::radic_themes.themeClass' => '\\Laradic\\Themes\\Theme',
  '*::radic_themes.widgetsClass' => '\\Laradic\\Themes\\Widgets',
  '*::radic_themes.paths.themes.0' => '/mnt/safe/laradic/workspace/public',
  '*::radic_themes.paths.namespaces' => 'namespaces',
  '*::radic_themes.paths.packages' => 'packages',
  '*::radic_themes.paths.views' => 'views',
  '*::radic_themes.paths.assets' => 'assets',
  '*::radic_themes.paths.cache' => 'cache',
  '*::radic_themes.assets.preprocess' => true,
  '*::radic_themes.assets.minify' => true,
  '*::radic_themes.assets.compress' => true,
  '*::radic_themes.assets.optimize' => true,
  '*::debugbar.enabled' => false,
  '*::debugbar.storage.enabled' => true,
  '*::debugbar.storage.driver' => 'file',
  '*::debugbar.storage.path' => '/mnt/safe/laradic/workspace/storage/debugbar',
  '*::debugbar.storage.connection' => NULL,
  '*::debugbar.include_vendors' => false,
  '*::debugbar.capture_ajax' => true,
  '*::debugbar.collectors.phpinfo' => true,
  '*::debugbar.collectors.messages' => true,
  '*::debugbar.collectors.time' => true,
  '*::debugbar.collectors.memory' => true,
  '*::debugbar.collectors.exceptions' => true,
  '*::debugbar.collectors.log' => true,
  '*::debugbar.collectors.db' => true,
  '*::debugbar.collectors.views' => true,
  '*::debugbar.collectors.route' => true,
  '*::debugbar.collectors.laravel' => true,
  '*::debugbar.collectors.events' => true,
  '*::debugbar.collectors.default_request' => true,
  '*::debugbar.collectors.symfony_request' => true,
  '*::debugbar.collectors.mail' => true,
  '*::debugbar.collectors.logs' => true,
  '*::debugbar.collectors.files' => true,
  '*::debugbar.collectors.config' => true,
  '*::debugbar.collectors.auth' => true,
  '*::debugbar.collectors.session' => true,
  '*::debugbar.options.auth.show_name' => true,
  '*::debugbar.options.db.with_params' => true,
  '*::debugbar.options.db.timeline' => false,
  '*::debugbar.options.db.backtrace' => false,
  '*::debugbar.options.db.explain.enabled' => false,
  '*::debugbar.options.db.explain.types.0' => 'SELECT',
  '*::debugbar.options.db.hints' => true,
  '*::debugbar.options.mail.full_log' => false,
  '*::debugbar.options.views.data' => true,
  '*::debugbar.options.route.label' => true,
  '*::debugbar.options.logs.file' => true,
  '*::debugbar.inject' => false,
  '*::debugbar.route_prefix' => '_debugbar',
  '*::console.filter' => 'console_whitelist',
  '*::console.whitelist.0' => '127.0.0.1',
  '*::console.whitelist.1' => '192.168.10.1',
  '*::console.whitelist.2' => '::1',
  '*::sentry.driver' => 'eloquent',
  '*::sentry.hasher' => 'native',
  '*::sentry.cookie.key' => 'cartalyst_sentry',
  '*::sentry.groups.model' => 'Sentinel\\Models\\Group',
  '*::sentry.users.model' => 'Sentinel\\Models\\User',
  '*::sentry.users.login_attribute' => 'email',
  '*::sentry.user_groups_pivot_table' => 'users_groups',
  '*::sentry.throttling.enabled' => true,
  '*::sentry.throttling.model' => 'Cartalyst\\Sentry\\Throttling\\Eloquent\\Throttle',
  '*::sentry.throttling.attempt_limit' => 5,
  '*::sentry.throttling.suspension_time' => 15,
  '*::cache.default' => 'redis',
  '*::cache.stores.apc.driver' => 'apc',
  '*::cache.stores.array.driver' => 'array',
  '*::cache.stores.database.driver' => 'database',
  '*::cache.stores.database.table' => 'cache',
  '*::cache.stores.database.connection' => 'sqlite',
  '*::cache.stores.file.driver' => 'file',
  '*::cache.stores.file.path' => '/mnt/safe/laradic/workspace/storage/framework/cache',
  '*::cache.stores.memcached.driver' => 'memcached',
  '*::cache.stores.memcached.servers.0.host' => '127.0.0.1',
  '*::cache.stores.memcached.servers.0.port' => 11211,
  '*::cache.stores.memcached.servers.0.weight' => 100,
  '*::cache.stores.redis.driver' => 'redis',
  '*::cache.stores.redis.connection' => 'default',
  '*::cache.prefix' => 'laravel',
  '*::mail.driver' => 'smtp',
  '*::mail.host' => 'smtp.mailgun.org',
  '*::mail.port' => 587,
  '*::mail.from.address' => NULL,
  '*::mail.from.name' => NULL,
  '*::mail.encryption' => 'tls',
  '*::mail.username' => NULL,
  '*::mail.password' => NULL,
  '*::mail.sendmail' => '/usr/sbin/sendmail -bs',
  '*::mail.pretend' => false,
  '*::github.default' => 'main',
  '*::github.connections.main.token' => '4ac62cf8add8d3efd0b5d2409be6c3ebe8751583',
  '*::github.connections.alternative.token' => 'your-token',
  '*::app.debug' => true,
  '*::app.url' => 'http://la.radic.nl',
  '*::app.timezone' => 'Europe/Amsterdam',
  '*::app.locale' => 'en',
  '*::app.fallback_locale' => 'en',
  '*::app.key' => 'zDDgUegdnNez4eL1maBZOR6nkCbE4jAl',
  '*::app.cipher' => 'rijndael-128',
  '*::app.log' => 'daily',
  '*::app.providers.0' => 'Illuminate\\Foundation\\Providers\\ArtisanServiceProvider',
  '*::app.providers.1' => 'Illuminate\\Auth\\AuthServiceProvider',
  '*::app.providers.2' => 'Illuminate\\Bus\\BusServiceProvider',
  '*::app.providers.3' => 'Illuminate\\Cache\\CacheServiceProvider',
  '*::app.providers.4' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
  '*::app.providers.5' => 'Illuminate\\Routing\\ControllerServiceProvider',
  '*::app.providers.6' => 'Illuminate\\Cookie\\CookieServiceProvider',
  '*::app.providers.7' => 'Illuminate\\Database\\DatabaseServiceProvider',
  '*::app.providers.8' => 'Illuminate\\Encryption\\EncryptionServiceProvider',
  '*::app.providers.9' => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
  '*::app.providers.10' => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
  '*::app.providers.11' => 'Illuminate\\Hashing\\HashServiceProvider',
  '*::app.providers.12' => 'Illuminate\\Mail\\MailServiceProvider',
  '*::app.providers.13' => 'Illuminate\\Pagination\\PaginationServiceProvider',
  '*::app.providers.14' => 'Illuminate\\Pipeline\\PipelineServiceProvider',
  '*::app.providers.15' => 'Illuminate\\Queue\\QueueServiceProvider',
  '*::app.providers.16' => 'Illuminate\\Redis\\RedisServiceProvider',
  '*::app.providers.17' => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
  '*::app.providers.18' => 'Illuminate\\Session\\SessionServiceProvider',
  '*::app.providers.19' => 'Illuminate\\Translation\\TranslationServiceProvider',
  '*::app.providers.20' => 'Illuminate\\Validation\\ValidationServiceProvider',
  '*::app.providers.21' => 'Illuminate\\View\\ViewServiceProvider',
  '*::app.providers.22' => 'Laradic\\Workbench\\WorkbenchServiceProvider',
  '*::app.providers.23' => 'App\\Providers\\AppServiceProvider',
  '*::app.providers.24' => 'App\\Providers\\BusServiceProvider',
  '*::app.providers.25' => 'App\\Providers\\ConfigServiceProvider',
  '*::app.providers.26' => 'App\\Providers\\EventServiceProvider',
  '*::app.providers.27' => 'App\\Providers\\RouteServiceProvider',
  '*::app.providers.28' => 'Clockwork\\Support\\Laravel\\ClockworkServiceProvider',
  '*::app.providers.29' => 'App\\AppServiceProvider',
  '*::app.aliases.App' => 'Illuminate\\Support\\Facades\\App',
  '*::app.aliases.Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
  '*::app.aliases.Auth' => 'Illuminate\\Support\\Facades\\Auth',
  '*::app.aliases.Blade' => 'Illuminate\\Support\\Facades\\Blade',
  '*::app.aliases.Bus' => 'Illuminate\\Support\\Facades\\Bus',
  '*::app.aliases.Cache' => 'Illuminate\\Support\\Facades\\Cache',
  '*::app.aliases.Config' => 'Illuminate\\Support\\Facades\\Config',
  '*::app.aliases.Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
  '*::app.aliases.Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
  '*::app.aliases.DB' => 'Illuminate\\Support\\Facades\\DB',
  '*::app.aliases.Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
  '*::app.aliases.Event' => 'Illuminate\\Support\\Facades\\Event',
  '*::app.aliases.File' => 'Illuminate\\Support\\Facades\\File',
  '*::app.aliases.Hash' => 'Illuminate\\Support\\Facades\\Hash',
  '*::app.aliases.Input' => 'Illuminate\\Support\\Facades\\Input',
  '*::app.aliases.Inspiring' => 'Illuminate\\Foundation\\Inspiring',
  '*::app.aliases.Lang' => 'Illuminate\\Support\\Facades\\Lang',
  '*::app.aliases.Log' => 'Illuminate\\Support\\Facades\\Log',
  '*::app.aliases.Mail' => 'Illuminate\\Support\\Facades\\Mail',
  '*::app.aliases.Password' => 'Illuminate\\Support\\Facades\\Password',
  '*::app.aliases.Queue' => 'Illuminate\\Support\\Facades\\Queue',
  '*::app.aliases.Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
  '*::app.aliases.Redis' => 'Illuminate\\Support\\Facades\\Redis',
  '*::app.aliases.Request' => 'Illuminate\\Support\\Facades\\Request',
  '*::app.aliases.Response' => 'Illuminate\\Support\\Facades\\Response',
  '*::app.aliases.Route' => 'Illuminate\\Support\\Facades\\Route',
  '*::app.aliases.Schema' => 'Illuminate\\Support\\Facades\\Schema',
  '*::app.aliases.Session' => 'Illuminate\\Support\\Facades\\Session',
  '*::app.aliases.Storage' => 'Illuminate\\Support\\Facades\\Storage',
  '*::app.aliases.URL' => 'Illuminate\\Support\\Facades\\URL',
  '*::app.aliases.Validator' => 'Illuminate\\Support\\Facades\\Validator',
  '*::app.aliases.View' => 'Illuminate\\Support\\Facades\\View',
  'laradic/workbench::config.workbench_path' => '/mnt/safe/laradic/workspace/workbench',
  'laradic/workbench::config.stubs_path' => '/mnt/safe/laradic/workspace/Laradic/Workbench/resources/config/../stubs',
  'laradic/workbench::config.author.name' => 'Robin Radic',
  'laradic/workbench::config.author.email' => 'robin@radic.nl',
  'laradic/workbench::config.author.homepage' => 'https://github.com/robinradic',
  'laradic/workbench::config.license' => 'MIT License',
  'laradic/workbench::config.license_link' => 'http://radic.mit-license.org',
  'laradic/debug::config.enabled' => true,
  'laradic/debug::config.onlyEnabledInDebugMode' => true,
  'laradic/debug::config.debugbar' => true,
  'laradic/debug::config.ide-helper' => true,
  'laradic/debug::config.tracy' => true,
  'laradic/debug::config.logging' => false,
  'laradic/debug::config.loggers.chrome' => true,
  'laradic/debug::config.loggers.firelog' => true,
  'laradic/debug::config.loggers.tracy' => false,
  'laradic/debug::config.loggers.debugbar' => true,
  '*::blade_extensions.markdown.enabled' => true,
  '*::blade_extensions.markdown.renderer' => 'Radic\\BladeExtensions\\Renderers\\ParsedownRenderer',
  '*::blade_extensions.markdown.views' => false,
  '*::blade_extensions.directives.doMacro' => '<?php
if(array_key_exists("form", $__env->getContainer()->getBindings())){
    echo app("form")->$1($2);
} ?>',
  '*::blade_extensions.directives.openMacro' => '<?php
if(array_key_exists("form", $__env->getContainer()->getBindings())){
    app("form")->macro("$1", function($2){',
  '*::blade_extensions.directives.closeMacro' => '    });
} ?>',
  '*::blade_extensions.directives.openForeach' => '<?php
\\Radic\\BladeExtensions\\Helpers\\LoopFactory::newLoop($1);
foreach($1 as $2):
    $loop = \\Radic\\BladeExtensions\\Helpers\\LoopFactory::loop();
?>',
  '*::blade_extensions.directives.closeForeach' => '$1<?php
\\Radic\\BladeExtensions\\Helpers\\LoopFactory::looped();
endforeach;
\\Radic\\BladeExtensions\\Helpers\\LoopFactory::endLoop($loop);
?>$2',
  '*::blade_extensions.directives.addBreak' => '$1<?php
    break;
?>$2',
  '*::blade_extensions.directives.addContinue' => '$1<?php
\\Radic\\BladeExtensions\\Helpers\\LoopFactory::looped();
continue;
?>$2',
  '*::blade_extensions.directives.addPartial' => '$1<?php \\Radic\\BladeExtensions\\Helpers\\Partial::renderPartial$2,
get_defined_vars(), function($file, $vars) use ($__env) {
        $vars = array_except($vars, array(\'__data\', \'__path\'));
        extract($vars); ?>',
  '*::blade_extensions.directives.endPartial' => '$1<?php echo $__env->make($file, $vars)->render(); }); ?>$2',
  '*::blade_extensions.directives.openBlock' => '$1<?php \\Radic\\BladeExtensions\\Helpers\\Partial::startBlock$2; ?>',
  '*::blade_extensions.directives.endBlock' => '$1<?php \\Radic\\BladeExtensions\\Helpers\\Partial::stopBlock(); ?>$2',
  '*::blade_extensions.directives.addRender' => '$1<?php echo \\Radic\\BladeExtensions\\Helpers\\Partial::renderBlock$2; ?>',
  '*::blade_extensions.directives.addSet' => '<?php \\$$1 = $2; ?>',
  '*::blade_extensions.directives.addUnset' => '<?php unset(\\$$1); ?>',
  '*::blade_extensions.directives.addDebug' => '<h1>DEBUG OUTPUT:</h1>
<pre><code>
    <?php (class_exists(\'Kint\') ? Kint::dump($1) : var_dump($1)) ?>
</code></pre>',
  '*::blade_extensions.directives.addBreakpoint' => '<!-- breakpoint --><?php var_dump(xdebug_break()); ?>',
  '*::blade_extensions.directives.openMarkdown' => '$1<?php echo \\Radic\\BladeExtensions\\Helpers\\Markdown::parse(<<<\'EOT\'$2',
  '*::blade_extensions.directives.closeMarkdown' => '$1
EOT
); ?>$2',
  '*::blade_extensions.directives.openWidget' => '$1<?php app(\'blade.widgets\')->openWidget$2; ?>',
  '*::blade_extensions.directives.closeWidget' => '$1<?php app(\'blade.widgets\')->closeWidget(); ?>',
  '*::blade_extensions.directives.startWidgetBlock' => '$1<?php app(\'blade.widgets\')->getCurrentWidget()->startSection$2 ?>',
  '*::blade_extensions.directives.stopWidgetBlock' => '$1<?php app(\'blade.widgets\')->getCurrentWidget()->stopSection$2 ?>',
  '*::blade_extensions.directives.renderWidgetBlock' => '$1<?php $__widget->yieldSection$2 ?>',
  'laradic/themes::config.debug' => false,
  'laradic/themes::config.active' => 'frontend/default',
  'laradic/themes::config.default' => 'frontend/default',
  'laradic/themes::config.fallback' => NULL,
  'laradic/themes::config.assetClass' => '\\Laradic\\Themes\\Assets\\Asset',
  'laradic/themes::config.themeClass' => '\\Laradic\\Themes\\Theme',
  'laradic/themes::config.widgetsClass' => '\\Laradic\\Themes\\Widgets',
  'laradic/themes::config.paths.themes.0' => '/mnt/safe/laradic/workspace/public',
  'laradic/themes::config.paths.namespaces' => 'namespaces',
  'laradic/themes::config.paths.packages' => 'packages',
  'laradic/themes::config.paths.views' => 'views',
  'laradic/themes::config.paths.assets' => 'assets',
  'laradic/themes::config.paths.cache' => 'cache',
  'laradic/themes::config.assets.preprocess' => true,
  'laradic/themes::config.assets.minify' => true,
  'laradic/themes::config.assets.compress' => true,
  'laradic/themes::config.assets.optimize' => true,
  '*::breadcrumbs.view' => 'breadcrumbs::bootstrap3',
  'laradic/generator::config.register_facade' => true,
  'laradic/generator::config.extensions.0' => 'php',
  'laradic/generator::config.extensions.1' => 'yml',
  'laradic/generator::config.extensions.2' => 'html',
  'laradic/generator::config.extensions.3' => 'json',
  'laradic/generator::config.extensions.4' => 'xml',
  'laradic/generator::config.extensions.5' => 'md',
  'laradic/extensions::config.paths.0' => '/mnt/safe/laradic/workspace/workbench',
  'laradic/extensions::config.table' => 'extensions',
  'laradic/extensions::config.type' => 'laradic-extension',
  '*::cartalyst.alerts.default' => 'flash',
  '*::cartalyst.alerts.classes.error' => 'danger',
  'docit/core::config.site_name' => 'DocIt',
  'docit/core::config.base_route' => 'doc',
  'docit/core::config.projects_path' => 'docs',
  'docit/core::config.default_project' => 'themes',
  'docit/core::config.default_page_attributes.layout' => 'default',
  'docit/core::config.default_page_attributes.code_color_scheme' => 'zenburn',
  'docit/core::config.default_page_attributes.disqus' => false,
  'docit/core::config.default_page_attributes.share_buttons.0' => 'facebook',
  'docit/core::config.default_page_attributes.share_buttons.1' => 'twitter',
  'docit/core::config.default_page_attributes.share_buttons.2' => 'linkedin',
  'docit/core::config.logging.enabled' => true,
  'docit/core::config.logging.path' => '/mnt/safe/laradic/workspace/storage/logs/docit.log',
  'docit/core::config.github.enabled' => true,
  'docit/core::config.github.token' => '4ac62cf8add8d3efd0b5d2409be6c3ebe8751583',
  'docit/core::config.github.webhook_sync' => '60%pTUgq4TfI',
  'docit/core::config.github.oauth_io' => 'UpFevf23G2O93iSlMOQ5PRL4zq0',
  'docit/core::config.disqus.enabled' => true,
  'docit/core::config.disqus.shortname' => 'docit',
  'docit/core::config.phpdoc.stubs.class' => '/mnt/safe/laradic/workspace/extensions/docit/core/resources/stubs/class.twig',
  'docit/core::config.phpdoc.stubs.index' => '/mnt/safe/laradic/workspace/extensions/docit/core/resources/stubs/index.twig',
  'docit/core::config.markdown.tags.(?<!\\/)bs-material' => '<div class="bs-material">',
  'docit/core::config.markdown.tags.\\/bs-material' => '</div>',
  'docit/core::config.markdown.tags.(?<!\\/)contextual:(.*?)' => '<div style="padding:10px 10px 5px;" class="bg-$1">',
  'docit/core::config.markdown.tags.\\/contextual' => '</div>',
  'docit/core::config.markdown.tags.(?<!\\/)hide' => '<div class="hide">',
  'docit/core::config.markdown.tags.\\/hide' => '</div>',
  'docit/core::config.markdown.tags.(?<!\\/)col-md-(\\d*)' => '<div class="col-md-$1">',
  'docit/core::config.markdown.tags.\\/col-md-(\\d*)' => '</div>',
  'docit/core::config.markdown.tags.(?<!\\/)row' => '<div class="row">',
  'docit/core::config.markdown.tags.\\/row' => '</div>',
  'docit/core::config.markdown.tags.table(.*?)' => '<div class="table table-markdoc $1">',
  'docit/core::config.markdown.tags.\\/table' => '</div>',
  'docit/core::config.markdown.tags.bar:(.*?):(\\d*?):(\\d*?):(\\d*?)' => '<div class="progress"><div role="progressbar" aria-valuenow="$3" aria-valuemin="$2" aria-valuemax="$4"style="width: $3%" class="progress-bar progress-bar-$1"><span class="sr-only">$3%</span></div></div>',
  'docit/core::config.console' => true,
  'laradic-admin/core::config.base_route' => 'admin',
  'laradic-admin/core::config.login_redirect' => 'dashboard',
  '*::chumper.datatable.table.class' => 'table table-bordered',
  '*::chumper.datatable.table.id' => '',
  '*::chumper.datatable.table.options.sPaginationType' => 'full_numbers',
  '*::chumper.datatable.table.options.bProcessing' => false,
  '*::chumper.datatable.table.noScript' => false,
  '*::chumper.datatable.table.table_view' => 'chumper.datatable::template',
  '*::chumper.datatable.table.script_view' => 'chumper.datatable::javascript',
  '*::chumper.datatable.table.options_view' => 'chumper.datatable::options',
  '*::chumper.datatable.engine.exactWordSearch' => false,
  'test/test::config.foo' => 'bar',
  'test/test::testman.test' => 'man',
  'test/test::tester.foo' => '"asdfsadf"',
  'test/test::tester.bar.foobar' => 'barfoo',
  'test/test::tester.foo32' => '"asdfsa1"',
  'test/test::tester.foo321' => '"asdfsa111"',
)