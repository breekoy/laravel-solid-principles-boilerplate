<?php

namespace App\Reporter;

class SalesHtmlOutput extends SalesOutputInterface {
    public function output ($sales) {
        return '<h1> Total Sales: ₱' . number_format($sales, 2, '.', ',') . '</h1>';
    }
}