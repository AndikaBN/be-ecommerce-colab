<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;


class ProductImport implements ToModel
{
    public function model(array $row)
    {
        return new Product([
            'ID' => $row[0],
            'category_id' => $row[1],
            'brand_id' => $row[2],
            'name' => $row[3],
            'description' => $row[4],
            'image' => $row[5],
            'price' => $row[6],
            'stock' => $row[7],
            'status' => $row[8],
            'is_favorite' => $row[9],
        ]);
    }
}
