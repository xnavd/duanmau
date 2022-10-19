<?php

function insert_binhluan($noi_dung, $ma_hh, $ma_kh, $ngay_bl)
{
    $sql = "INSERT INTO binh_luan(noi_dung, ma_hh, ma_kh, ngay_bl) VALUES('$noi_dung', '$ma_hh', '$ma_kh', '$ngay_bl')";
    pdo_execute($sql);
}


function load_all_binhluan($idpro)
{
    $sql = "SELECT * FROM binh_luan WHERE ma_hh='" . $idpro . "' ORDER BY ma_bl DESC";
    $list_binhluan = pdo_query($sql);
    return $list_binhluan;
}

function load_binhluan()
{
    $sql = "SELECT * FROM binh_luan ORDER BY ma_bl DESC";
    $list_binhluan = pdo_query($sql);
    return $list_binhluan;
}

function delete_binhluan($ma_bl)
{
    $sql = "DELETE FROM binh_luan WHERE ma_bl=" . $ma_bl;
    pdo_execute($sql);
}
