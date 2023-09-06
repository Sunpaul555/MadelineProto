<?php declare(strict_types=1);
/**
 * This file is automatic generated by build_docs.php file
 * and is used only for autocomplete in multiple IDE
 * don't modify manually.
 */

namespace danog\MadelineProto\Namespace;

interface Upload
{
    /**
     * Returns content of a web file, by proxying the request through telegram, see the [webfile docs for more info](https://core.telegram.org/api/files#downloading-webfiles).
     *
     * **Note**: the query must be sent to the DC specified in the `webfile_dc_id` [MTProto configuration field](https://core.telegram.org/api/config#mtproto-configuration).
     *
     * @param array{_: 'inputWebFileLocation', url?: string, access_hash?: int}|array{_: 'inputWebFileGeoPointLocation', geo_point?: array{_: 'inputGeoPointEmpty'}|array{_: 'inputGeoPoint', lat: float, long: float, accuracy_radius?: int}, access_hash?: int, w?: int, h?: int, zoom?: int, scale?: int}|array{_: 'inputWebFileAudioAlbumThumbLocation', small?: bool, document?: array, title?: string, performer?: string} $location The file to download @see https://docs.madelineproto.xyz/API_docs/types/InputWebFileLocation.html
     * @param int $offset Number of bytes to be skipped
     * @param int $limit Number of bytes to be returned
     * @return array{_: 'upload.webFile', file_type: array{_: 'storage.fileUnknown'}|array{_: 'storage.filePartial'}|array{_: 'storage.fileJpeg'}|array{_: 'storage.fileGif'}|array{_: 'storage.filePng'}|array{_: 'storage.filePdf'}|array{_: 'storage.fileMp3'}|array{_: 'storage.fileMov'}|array{_: 'storage.fileMp4'}|array{_: 'storage.fileWebp'}, size: int, mime_type: string, mtime: int, bytes: string} @see https://docs.madelineproto.xyz/API_docs/types/upload.WebFile.html
     */
    public function getWebFile(array $location, int|null $offset = 0, int|null $limit = 0): array;
}
