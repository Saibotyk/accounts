<?php
session_start();


function getList(array $array): string
{
    $html = "<tbody>";
    foreach ($array as $payment) {
        $html .= '    <tr>
    <td width="50" class="ps-3">';
        if ($payment['icon_class'] !== null) {
            $html .= '<i class="bi bi-' . $payment['icon_class'] . ' fs-3"></i>';
        }
        $html .= '</td>
    <td>
        <time datetime=' . $payment['date_transaction'] . ' class="d-block fst-italic fw-light">' . $payment['date_transaction'] . '</time>
        ' . $payment['name'] . '
    </td>
    <td class="text-end">
        <span class="rounded-pill text-nowrap bg-warning-subtle px-2">
            ' . $payment['amount'] . '
        </span>
    </td>
    <td class="text-end text-nowrap">
        <a href="modify.php?id=' . $payment['id_transaction'] . '&name=' . $payment['name'] . '&date=' . $payment['date_transaction'] . '&amount=' . $payment['amount'] . '&category=' . $payment['id_category'] . '&token=' . $_SESSION['myToken'] . '" class="btn btn-outline-primary btn-sm rounded-circle">
            <i class="bi bi-pencil"></i>
        </a>
        <a href="delete.php?id=' . $payment['id_transaction'] . '&token=' . $_SESSION['myToken'] . '" class="btn btn-outline-danger btn-sm rounded-circle">
            <i class="bi bi-trash"></i>
        </a>
    </td>
</tr>';
    }
    return $html;
}

function verifyToken()
{
    if (!array_key_exists('myToken', $_SESSION) || !array_key_exists('token', $_REQUEST) || $_SESSION['myToken'] !== $_REQUEST['token']) {
        header('location: index.php?msg=wrongToken');
        exit;
    }
}

$popupMsg = [
    'okModify' => '<div class="ps-3 bg-info d-flex justify-content-center align-items-center vh-15"><p class="fw-bold fs-5">La modification a bien eu lieu</p></div>',
    'koModify' => '<div class="ps-3 bg-info d-flex justify-content-center align-items-center vh-15"><p class="fw-bold fs-5">La modification a échoué</p></div>',
    'okDelete' => '<div class="ps-3 bg-info d-flex justify-content-center align-items-center vh-15"><p class="fw-bold fs-5">La suppression est effective</p></div>',
    'okAdd' => '<div class="ps-3 bg-info d-flex justify-content-center align-items-center vh-15"><p class="fw-bold fs-5">L\'ajout est ajouté</p></div>',
    'koAdd' => '<div class="ps-3 bg-info d-flex justify-content-center align-items-center vh-15"><p class="fw-bold fs-5">L\'ajout est raté</p></div>',
    
];

function getPopupText(array $array): string
{
    $msg = $_GET['msg'] ?? '';
    if (array_key_exists($msg, $array)) {
        return $array[$msg];
    }
    return '';
};
