<?php
namespace Leafcutter\Addons\Example\ExampleAddon;

class Addon extends \Leafcutter\Addons\AbstractAddon
{
    const DEFAULT_CONFIG = [];

    /**
     * Method is executed as the first step when this Addon is loaded for use.
     *
     * @return void
     */
    public function load(): void
    {
    }

    /**
     * Used after loading to give Leafcutter an array of event subscribers.
     * An easy way of rapidly developing simple Addons is to simply return [$this]
     * and put your event listener methods in this same single class.
     *
     * @return array
     */
    public function getEventSubscribers(): array
    {
        return [];
    }

    /**
     * Specify the names of the features this Addon provides. Some names may require
     * you to implement certain interfaces.
     *
     * @return array
     */
    public static function provides(): array
    {
        return [];
    }

    /**
     * Specify an array of the names of features this Addon requires. Leafcutter
     * will attempt to automatically load the necessary Addons to provide these
     * features when this Addon is loaded.
     *
     * @return array
     */
    public static function requires(): array
    {
        return [];
    }

    /**
     * Return the canonical name of this plugin. Generally this should be the
     * same as the composer package name, so this example pulls it from your
     * composer.json automatically.
     *
     * @return string
     */
    public static function name(): string
    {
        if ($data = json_decode(file_get_contents(__DIR__.'/../composer.json'),true)) {
            return $data['name'];
        }
        return 'unknown/unknownaddon';
    }
}
