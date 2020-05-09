<?php
namespace admin\models;

use yii\db\Query;
use admin\models\User;


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
                'total_post'    =>  $this->getTotalPost(),
                'total_cat'     =>  $this->getTotalCategory(),
                'total_pages'   =>  $this->getTotalPages(),
                'total_brands'  =>   $this->getTotalBrands(), 
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
        ->from('pages')
        ->count();

        return $count;
    }

    /**
     * get total brands
     */
    public function getTotalBrands()
    {
        $count = (new Query)
        ->from('brands')
        ->count();

        return $count;

    }

    /**
     * get total posts
     */
    public function getTotalPost()
    {
        $count = (new Query)
        ->from('post')
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
     * get total in-active user
     */
    public function getTotalInActiveUser()
    {
        $data = (new Query)
        ->from('user')
        ->where([ 'status' => 'N' ])
        ->count();

        return $data;
    }
    
    /**
     * get total pending user
     */
    public function getTotalPendingUser()
    {
        $data = (new Query)
        ->from('user')
        ->where([ 'status' => 'P' ])
        ->count();
        return $data;
    }

    /**
     * get user status in json
     */
    public function getUserTypeinJSON()
    {
        
        try
        {
            $user_data = array(
                'active'    => $this->getTotalActiveUser(),
                'inactive'  => $this->getTotalInActiveUser(),
                'pending'   => $this->getTotalPendingUser()
            );

            return json_encode($user_data);

        } 
        catch( Execption $e )
        {
            return json_encode( array() );
        }
    }


    /**
     * get user for current month only
     */
    public function getOnlyCurrentMonthUser()
    {
        
        $users = User::getCurrentMonthUser();
        $data = array();
        foreach( $users as $user )
        {
            $new_user = User::findOne( $user['id'] );
            $user_info = array(
                "name"  => $new_user->getFname(),
                "user_image"    =>  $new_user->getUserProfileImageSrc(),
                "join_date"     =>  $new_user->userJoinDate(),
                "detail_view_url"   => $new_user->getDetailPageUrl()
            );
            array_push( $data, $user_info );
        }
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



