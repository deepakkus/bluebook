<?php
namespace backend\models;

use yii\db\Query;
use backend\models\User;


class Dashboard 
{

    /**
     * Home page over view
     */
    public function HomePageOverviewInJSON()
    {
        try
        {
            $data = array(
                'total_cat'     =>  $this->getTotalCategory(),
                'total_pages'   =>  $this->getTotalPages(),
                'total_user'    =>   $this->getTotalUser()
            );

            return json_encode($data);
        }
        catch( Execption $e )
        {
            return json_encode( array() );
        }
    }

    /**
     * get total pages
     */
    public function getTotalPages()
    {   
        $count = (new Query)
        ->from('page')
        ->count();

        return $count;
    }

    /**
     * get total brands
     */
    public function getTotalBrands()
    {
        $count = (new Query)
        ->from('news')
        ->count();

        return $count;

    }

    /**
     * get total category
     */
    public function getTotalCategory()
    {
        $count = (new Query)
        ->from('categories')
        ->count();

        return $count;

    }

    /**
     * total user type in JSON
     */
    public function totaluserTypeInJSON()
    {
        try {

            $data = array(
                "admin"     => $this->totaluserByAdmin(),
                "seller"    => $this->totaluserBySeller(),
                "buyer"     => $this->totaluserByBuyer()
            );
            return json_encode( $data );

        } catch( Execption $e ){
            return json_encode( array() );
        }
    }

    /**
     * get total admin user
     */
    public function totaluserByAdmin()
    {
        $count = (new Query)
        ->from('user')
        ->where(['usertype' => 'ADMIN'])
        ->count();

        return $count;
    }

    /**
     * get total buyer user
     */
    public function totaluserByBuyer()
    {
        $count = (new Query)
        ->from('user')
        ->where(['usertype' => 'B'])
        ->count();

        return $count;
    }
    
    /**
     * get total seller user
     */
    public function totaluserBySeller()
    {
        $count = (new Query)
        ->from('user')
        ->where(['usertype' => 'S'])
        ->count();

        return $count;
    }
    /**
     * get total user
     */
    public function getTotalUser()
    {

        $count = (new Query)
        ->from('user')
        ->count();

        return $count;
    }

    /**
     * get total active user
     */
    public function getTotalActiveUser()
    {
        $data = (new Query)
                ->from('user')
                ->where([ 'status' => 'Y' ])
                ->count();

        return $data;
    }
	/**
     * count toal user for this total month
     */
    public function totalUserForCurrentMonth()
    {
        $current_month = date('m');
        $users = (new Query)
                ->select(['id'])
                ->from('user')
                ->where( [ 'MONTH(created_at)' =>  $current_month ]  )
                ->count();
        return $users;
    }
}



