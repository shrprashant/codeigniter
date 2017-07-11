<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function selectProduct() {

        $this->load->model('Model_Cart');
        $data['message'] = $this->Model_Cart->selectProduct();
        $this->load->view('dashboard/petMart1', $data);
    }

    // Add Items To Cart
    public function addToCart($item_id) {
        $sessionData = $this->session->userdata('user_id');
        if ($sessionData != '') {
            $this->load->model('Model_Cart');

            $this->Model_Cart->addProductInCart($sessionData, $item_id);
            $this->Model_Cart->getNamePrice($item_id);

            redirect(site_url('Cart/selectProduct'));
        } else {
            $this->load->view('dashboard/dashboard');
        }
    }

    public function getCartProduct() {

        $sessionData = $this->session->userdata('user_id');
        if ($sessionData != '') {
            $this->load->model('Model_Cart');
            $cart['cartProduct'] = $this->Model_Cart->getCartProduct($sessionData);
            $this->load->view('dashboard/editCart',$cart);
        } else {
            redirect('Cart/selectProduct');
        }
    }

    public function updateCart() {
        $quantity = $this->input->post('quantity');
        $cart_id = $this->input->post('cart_id');

        $this->load->model('Model_Cart');
        $check = $this->Model_Cart->updateProductInCart($cart_id, $quantity);
        if ($check) {
            redirect('Cart/selectProduct');
        } else {
            echo "Not done";
        }
    }

    public function deleteCart($order_id) {
        $this->load->model('Model_Cart');
        $check = $this->Model_Cart->removeProductInCart($order_id);
        redirect(site_url('Cart/selectProduct'));
    }

   

}

?>