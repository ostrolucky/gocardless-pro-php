<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardlessPro\Resources;

/**
  * Subscriptions create [payments](#core-endpoints-payments) according to a
  * schedule.
  * 
  * #### Recurrence Rules
  * 
  * The following rules apply
  * when specifying recurrence:
  * - The first payment must be charged within 1
  * year.
  * - When neither `month` nor `day_of_month` are present, the
  * subscription will recur from the `start_date` based on the `interval_unit`.

  *  * - If `month` or `day_of_month` are present, the recurrence rules will be
  * applied from the `start_date`, and the following validations apply:
  * 
  *
  * | interval_unit   | month                                          |
  * day_of_month                            |
  * | :-------------- |
  * :--------------------------------------------- |
  * :-------------------------------------- |
  * | yearly          | optional
  * (required if `day_of_month` provided) | optional (required if `month`
  * provided) |
  * | monthly         | invalid                                 
  *       | required                                |
  * | weekly          |
  * invalid                                        | invalid                    
  *             |
  * 
  * Examples:
  * 
  * | interval_unit   | interval   |
  * month   | day_of_month   | valid?                                           
  *  |
  * | :-------------- | :--------- | :------ | :------------- |
  * :------------------------------------------------- |
  * | yearly          |
  * 1          | january | -1             | valid                               
  *               |
  * | yearly          | 1          | march   |              
  *  | invalid - missing `day_of_month`                   |
  * | monthly       
  *  | 6          |         | 12             | valid                            
  *                  |
  * | monthly         | 6          | august  | 12        
  *     | invalid - `month` must be blank                    |
  * | weekly     
  *     | 2          |         |                | valid                         
  *                     |
  * | weekly          | 2          | october | 10     
  *        | invalid - `month` and `day_of_month` must be blank |
  * 
  * ####
  * Rolling dates
  * 
  * When a charge date falls on a non-business day, one
  * of two things will happen:
  * 
  * - if the recurrence rule specified `-1`
  * as the `day_of_month`, the charge date will be rolled __backwards__ to the
  * previous business day (i.e., the last working day of the month).
  * -
  * otherwise the charge date will be rolled __forwards__ to the next business
  * day.
  * 
  */
class Subscription extends Base
{



  /**
    * Amount in pence or cents.
    *
    * @return int
    */
    public function amount()
    {
        $field = 'amount';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * An alternative way to set `end_date`. The total number of payments that
    * should be taken by this subscription. This will set `end_date`
    * automatically.
    *
    * @return int
    */
    public function count()
    {
        $field = 'count';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * Fixed [timestamp](#overview-time-zones-dates), recording when this
    * resource was created.
    *
    * @return string
    */
    public function created_at()
    {
        $field = 'created_at';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217) currency code. Currently
    * only `GBP` and `EUR` are supported.
    *
    * @return string
    */
    public function currency()
    {
        $field = 'currency';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * As per RFC 2445. The day of the month to charge customers on. `1`-`28` or
    * `-1` to indicate the last day of the month.
    *
    * @return int
    */
    public function day_of_month()
    {
        $field = 'day_of_month';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * Date after which no further payments should be charged. If a payment falls
    * on this date, it **will not** be charged. If blank, the subscription will
    * continue forever. Alternatively, `count` can be set to achieve a specific
    * number of payments.
    *
    * @return string
    */
    public function end_date()
    {
        $field = 'end_date';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * Unique identifier, beginning with "SB".
    *
    * @return string
    */
    public function id()
    {
        $field = 'id';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * Number of `interval_units` between customer charge dates. Must result in
    * at least one charge date per year. Defaults to `1`.
    *
    * @return int
    */
    public function interval()
    {
        $field = 'interval';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * The unit of time between customer charge dates. One of `weekly`, `monthly`
    * or `yearly`.
    * [weekly monthly yearly]
    * @return string
    */
    public function interval_unit()
    {
        $field = 'interval_unit';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * Referenced objects. Key values to stdClasses returned.
    *
    * @return Wrapper\NestedObject
    */
    public function links()
    {
        $field = 'links';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return new Wrapper\NestedObject($field, $this->data->{$field});

    }

  /**
    * Key-value store of custom data. Up to 3 keys are permitted, with key names
    * up to 50 characters and values up to 200 characters.
    *
    * @return Wrapper\NestedObject
    */
    public function metadata()
    {
        $field = 'metadata';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return new Wrapper\NestedObject($field, $this->data->{$field});

    }

  /**
    * Name of the month on which to charge a customer. Must be lowercase.
    * [january february march april may june july august september october november december <nil>]
    * @return string
    */
    public function month()
    {
        $field = 'month';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * Optional name for the subscription. This will be set as the description on
    * each payment created. Must not exceed 255 characters.
    *
    * @return string
    */
    public function name()
    {
        $field = 'name';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * An optional payment reference. This will be set as the reference on each
    * payment created and will appear on your customer's bank statement. See the
    * documentation for the [create payment
    * endpoint](#payments-create-a-payment) for more details.
    *
    * @return string
    */
    public function payment_reference()
    {
        $field = 'payment_reference';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * The date on which the first payment should be charged. Must be within one
    * year of creation and on or after the [mandate](#core-endpoints-mandates)'s
    * `next_possible_charge_date`. When blank, this will be set as the mandate's
    * `next_possible_charge_date`.
    *
    * @return string
    */
    public function start_date()
    {
        $field = 'start_date';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * One of:
    * <ul>
    * <li>`active`: the subscription is currently
    * active and will continue to create payments</li>
    * <li>`finished`: all
    * of the payments scheduled for creation under this subscription have been
    * created</li>
    * <li>`cancelled`: the subscription has been cancelled
    * and will no longer create payments</li>
    * </ul>
    *
    * @return string
    */
    public function status()
    {
        $field = 'status';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * Up to 10 upcoming payments with the amount, in pence, and charge date for
    * each.
    *
    * @return Wrapper\NestedArray
    */
    public function upcoming_payments()
    {
        $field = 'upcoming_payments';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return new Wrapper\NestedArray($field, $this->data->{$field});

    }


  /**
    * Returns a string representation of the project.
    *
    * @return string 
    */
    public function __toString()
    {
        $ret = 'Subscription Class (';
        $ret .= print_r($this->data, true);
        return $ret;
    }
}
