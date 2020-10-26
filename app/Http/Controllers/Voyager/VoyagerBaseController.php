<?php

namespace App\Http\Controllers\Voyager;

use TCG\Voyager\Http\Controllers\VoyagerBaseController as BaseVoyagerBaseController;

class VoyagerBaseController extends BaseVoyagerBaseController
{
    protected function cleanup($dataType, $data)
    {
        // Delete Translations, if present
        if (is_bread_translatable($data)) {
            $data->deleteAttributeTranslations($data->getTranslatableAttributes());
        }

        // Delete Images
        $this->deleteBreadImages($data, $dataType->deleteRows->whereIn('type', ['image', 'multiple_images']));

        // Delete Files
        foreach ($dataType->deleteRows->where('type', 'file') as $row) {
            if (isset($data->{$row->field})) {
                if(strpos($data->{$row->field},"{")>0)
                {
                    foreach (json_decode($data->{$row->field}) as $file) {
                        $this->deleteFileIfExists($file->download_link);
                    }
                }
                else{
                    $this->deleteFileIfExists($data->{$row->field});
                }

            }
        }

        // Delete media-picker files
        $dataType->rows->where('type', 'media_picker')->where('details.delete_files', true)->each(function ($row) use ($data) {
            $content = $data->{$row->field};
            if (isset($content)) {
                if (!is_array($content)) {
                    $content = json_decode($content);
                }
                if (is_array($content)) {
                    foreach ($content as $file) {
                        $this->deleteFileIfExists($file);
                    }
                } else {
                    $this->deleteFileIfExists($content);
                }
            }
        });
    }
}
