<?php

function getList(array $array): string {
    $html = "<tbody>";
    foreach($array as $payment){
$html .= '    <tr>
    <td width="50" class="ps-3">
    <i class="bi bi-'.$payment['icon_class'].' fs-3"></i>
    </td>
    <td>
        <time datetime='.$payment['date_transaction'].' class="d-block fst-italic fw-light">'.$payment['date_transaction'].'</time>
        '.$payment['name'].'
    </td>
    <td class="text-end">
        <span class="rounded-pill text-nowrap bg-warning-subtle px-2">
            '.$payment['amount'].'
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
</tr>';}
return $html;
}

?>