<?php
namespace CjsProtocol;

function toJson($ary) {
    return json_encode($ary, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
}
