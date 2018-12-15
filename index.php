<?php
// TODO: Check the common.php example here:
//       https://github.com/google/php-photoslibrary/blob/samples/src/common/common.php
use Google\Auth\Credentials\UserRefreshCredentials;
use Google\Auth\OAuth2;

try {
    // Make a request to list all media items in the user's library
    // Iterate over all the retrieved media items
    // Pagination is handled automatically
    $response = $photosLibraryClient->listMediaItems();
    foreach ($response->iterateAllElements() as $item) {
        // Get some properties of a media item
        /* @var $item \Google\Photos\Library\V1\MediaItem */
        $id = $item->getId();
        $description = $item->getDescription();
        $mimeType = $item->getMimeType();
        $productUrl = $item->getProductUrl();
        $filename = $item->getFilename();
    }
} catch (\Google\ApiCore\ApiException $e) {
    // Handle error
    echo $e;
}
?>