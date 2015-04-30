KMJZillowBundle
================================

1) Installation
----------------------------------

KMJZillowBundle can conveniently be installed via Composer. Just run the following command from your project directory

<pre>
composer require "kmj/zillowbundle": 1.0.*
</pre>

Now, Composer will automatically download all required files, and install them for you. All that is left to do is to update your AppKernel.php file, and register the new bundle:

<pre>
// in AppKernel::registerBundles()
$bundles = array(
    // ...
    new KMJ\ZillowBundle\KMJZillowBundle(),
    // ...
);
</pre>

2) Configuration
----------------------------------

This bundle comes with a few configuration options.

<pre>
kmj_zillow:
    key: %zillow_key% #The Zillow API key
</pre>

3) Features
----------------------------------

This bundle's goal is to provide quick integration to the Zillow API. For documentation please use the [Zillow API documentation](http://www.zillow.com/howto/api/APIOverview.htm)

An example request would look like:

<pre>
$request = new SearchResultsRequest();

$request->setAddress("123 Elm St")
            ->setCityStateZip("Palo Alto, CA 94305")
            ->setRentZestimate(true);

return $request->getResponse();
</pre>
