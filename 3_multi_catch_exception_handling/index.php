<?php

class ChargeRejected extends Exception
{
}
class NotEnoughFunds extends Exception
{
}

class User
{
    public function subscribe()
    {
        // var_dump('subscribing here');
        // throw new ChargeRejected;
        throw new NotEnoughFunds;
    }
}

function flash($message)
{
    var_dump($message);
}

// Old
// try {
//     (new User)->subscribe();
// } catch (ChargeRejected $e) {
//     flash('failed');
// } catch (NotEnoughFunds $e) {
//     flash('failed');
// }

// New
try {
    (new User)->subscribe();
} catch (ChargeRejected | NotEnoughFunds $e) {
    flash('failed');
}
