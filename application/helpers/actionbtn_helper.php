
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Function Name
 *
 * Function description
 *
 * @access	public
 * @param	int/string	$id
 * @return	string 	$act
 */

if (!function_exists('actbtn')) {
	function actbtn($id, $target)
	{
		if ($id) {
			$btn = '<button type="button" class="btn btn-primary btn-sm editBtn" data-value="' . $id . '" data-target="' . $target . '" ><i class="fa fa-edit"></i></button>
					<button type="button" class="btn btn-danger btn-sm deleteBtn" data-value="' . $id . '" data-target="' . $target . '" ><i class="fa fa-trash-o"></i></button>';
		}
		return $btn;
	}
}
if(!function_exists('actBtnnnn')){
	function actBtnnnn($id, $target)
	{
		if ($id) {
			$btn = '<button type="button" class="btn btn-primary btn-sm editBtn" data-value="' . $id . '" data-target="' . $target . '"><i class="fa fa-edit"></i></button>
					<button type="button" class="btn btn-danger btn-sm deleteBtn" data-value="' . $id . '" data-target="' . $target . '"><i class="fa fa-trash-o"></i></button>
					<button type="button" class="btn btn-success btn-sm detailBtn" data-value="' . $id . '" data-target="' . $target . '"><i class="fa fa-eye"></i></button>';
		}
		return $btn;
	}
}
if (!function_exists('actBtnn')) {
    function actBtnn($id, $target, $status) {
        if ($id) {
            $btn = '
            <button type="button" class="btn btn-primary btn-sm openModalStatus" data-id="'.$id.'" data-status="'.$status.'" data-toggle="modal" data-target="#statusModal">
                <i class="fa fa-edit"></i> Ubah Status
            </button>
            <button type="button" class="btn btn-danger btn-sm deleteBtn" data-value="' . $id . '" data-target="' . $target . '">
                <i class="fa fa-trash-o"></i> Hapus
            </button>
            <button type="button" class="btn btn-success btn-sm detailBtn" data-value="' . $id . '" data-toggle="modal" data-target="' . $target . '">
                <i class="fa fa-eye"></i> Detail
            </button>';
        }
        return $btn;
    }
}


