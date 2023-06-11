<?php

class Alert
{
  public static function delete()
  {
    echo '
        <div class="alert alert-success mb-4"  role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
          <strong>Deleted!</strong> successfully.
        </div>';
  }

  public static function update()
  {
    echo ' 
        <div class="alert alert-primary mb-4" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
          <strong>Updated!</strong> successfully.
        </div>';
  }

  public static function insert()
  {
    echo ' 
        <div class="alert alert-primary mb-4" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
          <strong>Inserted!</strong> successfully.
        </div>';
  }

  public static function custom($msg)
  {
    echo "
        <div class='alert alert-danger mb-4' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'><svg> ... </svg></button>
          <strong> $msg </strong> .
        </div>";
  }


  public static function Success()
  {
    echo ' 
        <div class="alert alert-success mb-4" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
          <strong> Action </strong> Done successfully.
        </div>';
  }
  public static function Mem1()
  {
    echo ' 
        <div class="alert alert-success mb-4" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
          <strong> </strong> Select member one !
        </div>';
  }
  public static function Mem2()
  {
    echo ' 
        <div class="alert alert-success mb-4" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
          <strong> </strong> Select member two !
        </div>';
  }

}