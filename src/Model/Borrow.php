<?php


namespace Study\Model;


class Borrow
{
    protected $id;
    protected $date_borrow;
    protected $date_give;
    protected $status;
    protected $student_id;

    function __construct($id,$date_borrow,$date_give,$status,$student_id)
    {
        $this->id=$id;
        $this->date_borrow=$date_borrow;
        $this->date_give=$date_give;
        $this->status=$status;
        $this->student_id=$student_id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @return mixed
     */
    public function getCard()
    {
        return $this->card;
    }


    public function setCard($card)
    {
        $this->card = $card;
    }

    /**
     * @return mixed
     */
    public function getDateBorrow()
    {
        return $this->date_borrow;
    }

    /**
     * @param mixed $date_borrow
     */
    public function setDateBorrow($date_borrow)
    {
        $this->date_borrow = $date_borrow;
    }

    /**
     * @return mixed
     */
    public function getDateGive()
    {
        return $this->date_give;
    }

    /**
     * @param mixed $date_give
     */
    public function setDateGive($date_give)
    {
        $this->date_give = $date_give;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->student_id;
    }

    /**
     * @param mixed $student_id
     */
    public function setStudentId($student_id)
    {
        $this->student_id = $student_id;
    }


}