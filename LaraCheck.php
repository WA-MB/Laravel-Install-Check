<?php $requirements = ['BCMath', 'Ctype', 'Fileinfo', 'JSON', 'Mbstring', 'OpenSSL', 'PDO', 'Tokenizer', 'XML'];
$optionals = ['GD', 'Imagick', 'V8js', 'SQLite3', 'MySQLi', 'SQLite3', 'Zip', 'IconV'];
$packages = [['name' => 'Media Uploader', 'url' => 'https://github.com/ahmed-aliraqi/laravel-media-uploader', 'composer' => 'ahmed-aliraqi/laravel-media-uploader'], ['name' => 'Debugbar', 'url' => 'https://github.com/barryvdh/laravel-debugbar', 'composer' => 'barryvdh/laravel-debugbar --dev'], ['name' => 'IDE Helper Generator', 'url' => 'https://github.com/barryvdh/laravel-ide-helper', 'composer' => 'barryvdh/laravel-ide-helper --dev'], ['name' => 'DOMPDF Wrapper', 'url' => 'https://github.com/barryvdh/laravel-dompdf', 'composer' => 'barryvdh/laravel-dompdf'], ['name' => 'Intervention Image', 'url' => 'http://image.intervention.io/getting_started/installation#laravel', 'composer' => 'intervention/image'], ['name' => 'Schematics', 'url' => 'https://github.com/mtolhuys/laravel-schematics', 'composer' => 'mtolhuys/laravel-schematics'], ['name' => 'Livewire', 'url' => 'https://laravel-livewire.com/docs/quickstart', 'composer' => 'livewire/livewire'], ['name' => 'Boilerplate', 'url' => 'https://laravel-boilerplate.com/', 'composer' => '']];
$title = 'Laravel Server-Requirements Check'; ?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <style>
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        main {
            display: block
        }

        h1 {
            font-size: 2em;
            margin: .67em 0
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible
        }

        pre {
            font-family: monospace, monospace;
            font-size: 1em
        }

        a {
            background-color: transparent
        }

        abbr[title] {
            border-bottom: 0;
            text-decoration: underline;
            text-decoration: underline dotted
        }

        b, strong {
            font-weight: bolder
        }

        code, kbd, samp {
            font-family: monospace, monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub, sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -0.25em
        }

        sup {
            top: -0.5em
        }

        img {
            border-style: none
        }

        button, input, optgroup, select, textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0
        }

        button, input {
            overflow: visible
        }

        button, select {
            text-transform: none
        }

        button, [type="button"], [type="reset"], [type="submit"] {
            -webkit-appearance: button
        }

        button::-moz-focus-inner, [type="button"]::-moz-focus-inner, [type="reset"]::-moz-focus-inner, [type="submit"]::-moz-focus-inner {
            border-style: none;
            padding: 0
        }

        button:-moz-focusring, [type="button"]:-moz-focusring, [type="reset"]:-moz-focusring, [type="submit"]:-moz-focusring {
            outline: 1px dotted ButtonText
        }

        fieldset {
            padding: .35em .75em .625em
        }

        legend {
            box-sizing: border-box;
            color: inherit;
            display: table;
            max-width: 100%;
            padding: 0;
            white-space: normal
        }

        progress {
            vertical-align: baseline
        }

        textarea {
            overflow: auto
        }

        [type="checkbox"], [type="radio"] {
            box-sizing: border-box;
            padding: 0
        }

        [type="number"]::-webkit-inner-spin-button, [type="number"]::-webkit-outer-spin-button {
            height: auto
        }

        [type="search"] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        details {
            display: block
        }

        summary {
            display: list-item
        }

        template {
            display: none
        }

        [hidden] {
            display: none
        }

        *, *:after, *:before {
            box-sizing: inherit
        }

        html {
            box-sizing: border-box;
            font-size: 62.5%
        }

        body {
            color: #606c76;
            font-family: 'Roboto', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
            font-size: 1.6em;
            font-weight: 300;
            letter-spacing: .01em;
            line-height: 1.6
        }

        blockquote {
            border-left: .3rem solid #d1d1d1;
            margin-left: 0;
            margin-right: 0;
            padding: 1rem 1.5rem
        }

        blockquote *:last-child {
            margin-bottom: 0
        }

        .button, button, input[type='button'], input[type='reset'], input[type='submit'] {
            background-color: #9b4dca;
            border: .1rem solid #9b4dca;
            border-radius: .4rem;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-size: 1.1rem;
            font-weight: 700;
            height: 3.8rem;
            letter-spacing: .1rem;
            line-height: 3.8rem;
            padding: 0 3.0rem;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            white-space: nowrap
        }

        .button:focus, .button:hover, button:focus, button:hover, input[type='button']:focus, input[type='button']:hover, input[type='reset']:focus, input[type='reset']:hover, input[type='submit']:focus, input[type='submit']:hover {
            background-color: #606c76;
            border-color: #606c76;
            color: #fff;
            outline: 0
        }

        .button[disabled], button[disabled], input[type='button'][disabled], input[type='reset'][disabled], input[type='submit'][disabled] {
            cursor: default;
            opacity: .5
        }

        .button[disabled]:focus, .button[disabled]:hover, button[disabled]:focus, button[disabled]:hover, input[type='button'][disabled]:focus, input[type='button'][disabled]:hover, input[type='reset'][disabled]:focus, input[type='reset'][disabled]:hover, input[type='submit'][disabled]:focus, input[type='submit'][disabled]:hover {
            background-color: #9b4dca;
            border-color: #9b4dca
        }

        .button.button-outline, button.button-outline, input[type='button'].button-outline, input[type='reset'].button-outline, input[type='submit'].button-outline {
            background-color: transparent;
            color: #9b4dca
        }

        .button.button-outline:focus, .button.button-outline:hover, button.button-outline:focus, button.button-outline:hover, input[type='button'].button-outline:focus, input[type='button'].button-outline:hover, input[type='reset'].button-outline:focus, input[type='reset'].button-outline:hover, input[type='submit'].button-outline:focus, input[type='submit'].button-outline:hover {
            background-color: transparent;
            border-color: #606c76;
            color: #606c76
        }

        .button.button-outline[disabled]:focus, .button.button-outline[disabled]:hover, button.button-outline[disabled]:focus, button.button-outline[disabled]:hover, input[type='button'].button-outline[disabled]:focus, input[type='button'].button-outline[disabled]:hover, input[type='reset'].button-outline[disabled]:focus, input[type='reset'].button-outline[disabled]:hover, input[type='submit'].button-outline[disabled]:focus, input[type='submit'].button-outline[disabled]:hover {
            border-color: inherit;
            color: #9b4dca
        }

        .button.button-clear, button.button-clear, input[type='button'].button-clear, input[type='reset'].button-clear, input[type='submit'].button-clear {
            background-color: transparent;
            border-color: transparent;
            color: #9b4dca
        }

        .button.button-clear:focus, .button.button-clear:hover, button.button-clear:focus, button.button-clear:hover, input[type='button'].button-clear:focus, input[type='button'].button-clear:hover, input[type='reset'].button-clear:focus, input[type='reset'].button-clear:hover, input[type='submit'].button-clear:focus, input[type='submit'].button-clear:hover {
            background-color: transparent;
            border-color: transparent;
            color: #606c76
        }

        .button.button-clear[disabled]:focus, .button.button-clear[disabled]:hover, button.button-clear[disabled]:focus, button.button-clear[disabled]:hover, input[type='button'].button-clear[disabled]:focus, input[type='button'].button-clear[disabled]:hover, input[type='reset'].button-clear[disabled]:focus, input[type='reset'].button-clear[disabled]:hover, input[type='submit'].button-clear[disabled]:focus, input[type='submit'].button-clear[disabled]:hover {
            color: #9b4dca
        }

        code {
            background: #f4f5f6;
            border-radius: .4rem;
            font-size: 86%;
            margin: 0 .2rem;
            padding: .2rem .5rem;
            white-space: nowrap
        }

        pre {
            background: #f4f5f6;
            border-left: .3rem solid #9b4dca;
            overflow-y: hidden
        }

        pre > code {
            border-radius: 0;
            display: block;
            padding: 1rem 1.5rem;
            white-space: pre
        }

        hr {
            border: 0;
            border-top: .1rem solid #f4f5f6;
            margin: 3.0rem 0
        }

        input[type='color'], input[type='date'], input[type='datetime'], input[type='datetime-local'], input[type='email'], input[type='month'], input[type='number'], input[type='password'], input[type='search'], input[type='tel'], input[type='text'], input[type='url'], input[type='week'], input:not([type]), textarea, select {
            -webkit-appearance: none;
            background-color: transparent;
            border: .1rem solid #d1d1d1;
            border-radius: .4rem;
            box-shadow: none;
            box-sizing: inherit;
            height: 3.8rem;
            padding: .6rem 1.0rem .7rem;
            width: 100%
        }

        input[type='color']:focus, input[type='date']:focus, input[type='datetime']:focus, input[type='datetime-local']:focus, input[type='email']:focus, input[type='month']:focus, input[type='number']:focus, input[type='password']:focus, input[type='search']:focus, input[type='tel']:focus, input[type='text']:focus, input[type='url']:focus, input[type='week']:focus, input:not([type]):focus, textarea:focus, select:focus {
            border-color: #9b4dca;
            outline: 0
        }

        select {
            background: url('data:image/svg+xml;utf8,<svgxmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 8" width="30"><path fill="%23d1d1d1" d="M0,0l6,8l6-8"></path></svg>') center right no-repeat;
            padding-right: 3.0rem
        }

        select:focus {
            background-image: url('data:image/svg+xml;utf8,<svgxmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 8" width="30"><path fill="%239b4dca" d="M0,0l6,8l6-8"></path></svg>')
        }

        select[multiple] {
            background: 0;
            height: auto
        }

        textarea {
            min-height: 6.5rem
        }

        label, legend {
            display: block;
            font-size: 1.6rem;
            font-weight: 700;
            margin-bottom: .5rem
        }

        fieldset {
            border-width: 0;
            padding: 0
        }

        input[type='checkbox'], input[type='radio'] {
            display: inline
        }

        .label-inline {
            display: inline-block;
            font-weight: normal;
            margin-left: .5rem
        }

        .container {
            margin: 0 auto;
            max-width: 160.0rem;
            padding: 0 2.0rem;
            position: relative;
            width: 100%
        }

        .row {
            display: flex;
            flex-direction: column;
            padding: 0;
            width: 100%
        }

        .row.row-no-padding {
            padding: 0
        }

        .row.row-no-padding > .column {
            padding: 0
        }

        .row.row-wrap {
            flex-wrap: wrap
        }

        .row.row-top {
            align-items: flex-start
        }

        .row.row-bottom {
            align-items: flex-end
        }

        .row.row-center {
            align-items: center
        }

        .row.row-stretch {
            align-items: stretch
        }

        .row.row-baseline {
            align-items: baseline
        }

        .row .column {
            display: block;
            flex: 1 1 auto;
            margin-left: 0;
            max-width: 100%;
            width: 100%
        }

        .row .column.column-offset-10 {
            margin-left: 10%
        }

        .row .column.column-offset-20 {
            margin-left: 20%
        }

        .row .column.column-offset-25 {
            margin-left: 25%
        }

        .row .column.column-offset-33, .row .column.column-offset-34 {
            margin-left: 33.3333%
        }

        .row .column.column-offset-40 {
            margin-left: 40%
        }

        .row .column.column-offset-50 {
            margin-left: 50%
        }

        .row .column.column-offset-60 {
            margin-left: 60%
        }

        .row .column.column-offset-66, .row .column.column-offset-67 {
            margin-left: 66.6666%
        }

        .row .column.column-offset-75 {
            margin-left: 75%
        }

        .row .column.column-offset-80 {
            margin-left: 80%
        }

        .row .column.column-offset-90 {
            margin-left: 90%
        }

        .row .column.column-10 {
            flex: 0 0 10%;
            max-width: 10%
        }

        .row .column.column-20 {
            flex: 0 0 20%;
            max-width: 20%
        }

        .row .column.column-25 {
            flex: 0 0 25%;
            max-width: 25%
        }

        .row .column.column-33, .row .column.column-34 {
            flex: 0 0 33.3333%;
            max-width: 33.3333%
        }

        .row .column.column-40 {
            flex: 0 0 40%;
            max-width: 40%
        }

        .row .column.column-50 {
            flex: 0 0 50%;
            max-width: 50%
        }

        .row .column.column-60 {
            flex: 0 0 60%;
            max-width: 60%
        }

        .row .column.column-66, .row .column.column-67 {
            flex: 0 0 66.6666%;
            max-width: 66.6666%
        }

        .row .column.column-75 {
            flex: 0 0 75%;
            max-width: 75%
        }

        .row .column.column-80 {
            flex: 0 0 80%;
            max-width: 80%
        }

        .row .column.column-90 {
            flex: 0 0 90%;
            max-width: 90%
        }

        .row .column .column-top {
            align-self: flex-start
        }

        .row .column .column-bottom {
            align-self: flex-end
        }

        .row .column .column-center {
            align-self: center
        }

        @media (min-width: 40rem) {
            .row {
                flex-direction: row;
                margin-left: -1.0rem;
                width: calc(100% + 2.0rem)
            }

            .row .column {
                margin-bottom: inherit;
                padding: 0 1.0rem
            }
        }

        a {
            color: #9b4dca;
            text-decoration: none
        }

        a:focus, a:hover {
            color: #606c76
        }

        dl, ol, ul {
            list-style: none;
            margin-top: 0;
            padding-left: 0
        }

        dl dl, dl ol, dl ul, ol dl, ol ol, ol ul, ul dl, ul ol, ul ul {
            font-size: 90%;
            margin: 1.5rem 0 1.5rem 3.0rem
        }

        ol {
            list-style: decimal inside
        }

        ul {
            list-style: circle inside
        }

        .button, button, dd, dt, li {
            margin-bottom: 1.0rem
        }

        fieldset, input, select, textarea {
            margin-bottom: 1.5rem
        }

        blockquote, dl, figure, form, ol, p, pre, table, ul {
            margin-bottom: 2.5rem
        }

        table {
            border-spacing: 0;
            display: block;
            overflow-x: auto;
            text-align: left;
            width: 100%
        }

        td, th {
            border-bottom: .1rem solid #e1e1e1;
            padding: 1.2rem 1.5rem
        }

        td:first-child, th:first-child {
            padding-left: 0
        }

        td:last-child, th:last-child {
            padding-right: 0
        }

        @media (min-width: 40rem) {
            table {
                display: table;
                overflow-x: initial
            }
        }

        b, strong {
            font-weight: bold
        }

        p {
            margin-top: 0
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 300;
            letter-spacing: -.1rem;
            margin-bottom: 2.0rem;
            margin-top: 0
        }

        h1 {
            font-size: 4.6rem;
            line-height: 1.2
        }

        h2 {
            font-size: 3.6rem;
            line-height: 1.25
        }

        h3 {
            font-size: 2.8rem;
            line-height: 1.3
        }

        h4 {
            font-size: 2.2rem;
            letter-spacing: -.08rem;
            line-height: 1.35
        }

        h5 {
            font-size: 1.8rem;
            letter-spacing: -.05rem;
            line-height: 1.5
        }

        h6 {
            font-size: 1.6rem;
            letter-spacing: 0;
            line-height: 1.4
        }

        img {
            max-width: 100%
        }

        .clearfix:after {
            clear: both;
            content: ' ';
            display: table
        }

        .float-left {
            float: left
        }

        .float-right {
            float: right
        }

        .img path {
            animation: 7s a forwards;
            fill: #9b4dca;
            stroke: #9b4dca;
            stroke-dasharray: 38321;
            stroke-miterlimit: 10;
            stroke-width: 15px
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column">
            <table>
                <tr>
                    <td><a href="https://laravel.com" target="_blank" rel="noopener"><img
                                    src="laravel.logo.complete.svg" width="184"></a></td>
                    <td><a href="https://packagist.org/packages/laravel/framework" target="_blank"><img
                                    src="https://poser.pugx.org/laravel/framework/v/stable.svg"
                                    alt="Latest Stable Version"></a></td>
                </tr>
                <tr>
                    <td colspan="2"><h3>
                            <?php echo $title; ?></h3></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="column">
            <table>
                <thead>
                <tr><th colspan="3">Required</th></tr>
                <tr>
                    <th>needed</th>
                    <th>have</th>
                    <th>result</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>PHP >= 7.3</td>
                    <td><?php echo phpversion(); ?></td>
                    <td><?php if (version_compare(phpversion(), '7.3', '>')) {
                            echo '&nbsp;&nbsp;<svg
xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>';
                        } else {
                            echo phpversion() . '&nbsp;&nbsp;<svg
xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 352 512"><path d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"/></svg>';
                        } ?></td>
                </tr>
                <?php foreach ($requirements as $requirement) {
                    echo '<tr>';
                    echo '<td>'.$requirement.'</td><td>'.$requirement.'</td>';
                    echo '<td>';
                    if (extension_loaded(strtolower($requirement))) {
                        echo '&nbsp;&nbsp;<svg
xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>';
                    } else {
                        echo '&nbsp;&nbsp;<svg
xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 352 512"><path d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"/></svg>';
                    }
                    echo '</td>';
                    echo '</tr>';
                } ?>
                <tr><th colspan="3">Optional</th></tr>
                <tr>
                    <th>needed</th>
                    <th>have</th>
                    <th>result</th>
                </tr>
                <?php foreach ($optionals as $optional) {
                    echo '<tr>';
                    echo '<td>'.$optional.'</td><td>'.$optional.'</td>';
                    echo '<td>';
                    if (extension_loaded(strtolower($optional))) {
                        echo '&nbsp;&nbsp;<svg
xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>';
                    } else {
                        echo '&nbsp;&nbsp;<svg
xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 352 512"><path d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"/></svg>';
                    }
                    echo '</td>';
                    echo '</tr>';
                } ?>
                </tbody>
            </table>
        </div>
        <div class="column">
            <table>
                <tr>
                    <td colspan="2">
                        <p style="font-weight: bold">Installation Via Composer</p>
                        <pre><code>composer create-project laravel/laravel example-app<br>cd example-app<br>php artisan serve</code></pre>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p style="font-weight: bold">Getting Started with Laravel Installer as a global Composer dependency</p>
                        <pre><code>composer global require laravel/installer<br>laravel new example-app<br>cd example-app<br>php artisan serve</code></pre>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p style="font-weight: bold">Getting Started with Docker Desktop</p>
                        <pre><code>curl -s "https://laravel.build/example-app" | bash<br>cd example-app<br>./vendor/bin/sail up</code></pre>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p style="font-weight: bold">Installation Via Composer</p>
                        <pre><code>composer global require laravel/installer</code></pre>
                    </td>
                </tr>
            </table>
        </div>
        <div class="column">
            <dl>
                <dt style="font-weight: bold">Useful Laravel Packages</dt>
                <?php foreach ($packages as $package) {
                    echo '<dt><a class="button button-clear" target="_blank" href="' . $package['url'] . '">' . $package['name'] . ' for Laravel</a></dt>';
                    if (!empty($package['composer'])) {
                        echo '<dd><pre><code>composer global require ' . $package['composer'] . '</code></pre></dd>';
                    }
                } ?></dl>
        </div>
    </div>
    <div class="row">
        <div class="column">
            <p style="text-align: center">created with  
                <svg class="img" height="24" version="1.1" viewBox="0 0 463 669">
                    <g transform="translate(0.000000,669.000000) scale(0.100000,-0.100000)">
                        <path d="M2303 6677c-11-13-58-89-393-627-128-206-247-397-265-425-18-27-85-135-150-240-65-104-281-451-480-770-358-575-604-970-641-1032-10-18-45-74-76-126-47-78-106-194-107-212-1-3-11-26-24-53-60-118-132-406-157-623-19-158-8-491 20-649 82-462 291-872 619-1213 192-199 387-340 646-467 335-165 638-235 1020-235 382 0 685 70 1020 235 259 127 454 268 646 467 328 341 537 751 619 1213 28 158 39 491 20 649-25 217-97 505-157 623-13 27-23 50-23 53 0 16-57 127-107 210-32 52-67 110-77 128-37 62-283 457-641 1032-199 319-415 666-480 770-65 105-132 213-150 240-18 28-137 219-265 425-354 570-393 630-400 635-4 3-12-1-17-8zm138-904c118-191 654-1050 1214-1948 148-236 271-440 273-452 2-13 8-23 11-23 14 0 72-99 125-212 92-195 146-384 171-598 116-974-526-1884-1488-2110-868-205-1779 234-2173 1046-253 522-257 1124-10 1659 45 97 108 210 126 225 4 3 9 13 13 22 3 9 126 209 273 445 734 1176 1102 1766 1213 1946 67 108 124 197 126 197 2 0 59-89 126-197zM1080 3228c-75-17-114-67-190-243-91-212-128-368-137-580-34-772 497-1451 1254-1605 77-15 112-18 143-11 155 35 212 213 106 329-32 36-62 48-181 75-223 50-392 140-552 291-115 109-178 192-242 316-101 197-136 355-128 580 3 111 10 167 30 241 30 113 80 237 107 267 11 12 20 26 20 32 0 6 8 22 17 36 26 41 27 99 3 147-54 105-142 149-250 125z"></path>
                    </g>
                </svg>
                <a href="https://milligram.io/" target="_blank">Milligram CSS Framework</a></p>
        </div>
    </div>
</div>
</body>
</html>
