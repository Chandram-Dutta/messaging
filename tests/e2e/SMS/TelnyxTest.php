<?php

namespace Tests\E2E;

use Utopia\Messaging\Adapters\SMS\Telnyx;
use Utopia\Messaging\Messages\SMS;

class TelnyxTest extends Base
{
    /**
     * @throws \Exception
     */
    public function testSendSMS()
    {
        // $sender = new Telnyx(getenv('TELNYX_API_KEY'));

        // $message = new SMS(
        //     to: ['+18034041123'],
        //     content: 'Test Content',
        //     from: '+15005550006'
        // );

        // $result = \json_decode($sender->send($message), true);

        // $this->assertEquals('success', $result["type"]);

        $this->markTestSkipped('Telnyx had no testing numbers available at this time.');
    }
}
