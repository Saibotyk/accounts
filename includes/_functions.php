<?php

function getList(array $array): string {
$html = '    <tr>
    <td width="50" class="ps-3">
    </td>
    <td>
        <time datetime="2023-07-10" class="d-block fst-italic fw-light">'. .'</time>
        '. .'
    </td>
    <td class="text-end">
        <span class="rounded-pill text-nowrap bg-warning-subtle px-2">
            '. .'
        </span>
    </td>
    <td class="text-end text-nowrap">
        <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
            <i class="bi bi-pencil"></i>
        </a>
        <a href="#" class="btn btn-outline-danger btn-sm rounded-circle">
            <i class="bi bi-trash"></i>
        </a>
    </td>
</tr>';


return $html

}

?>