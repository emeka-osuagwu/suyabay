<?php

class TestCase extends \Illuminate\Foundation\Testing\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    public function setUp()
    {
        parent::setUp();
        $this->prepareTestDB();
    }

    public function tearDown()
    {
        $file = @fopen(storage_path("database.sqlite"), "r+");
        if ($file !== false) {
            ftruncate($file, 0);
            fclose($file);
        }
    }

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }

    /**
     * Prepare test database
     */
    public function prepareTestDB()
    {
        Config::set('database.default', 'sqlite');
        Artisan::call('migrate');
    }
}
