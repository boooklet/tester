<?php
class TesterTestRequestTest extends TesterCase
{
    public function testGetRequest()
    {
        $response = new TesterTestRequest('GET', 'http://api.booklet.dev', 'bad-token');
        Assert::expect($response->body)->to_equal('{"errors":[{"message":"Resource not found."}]}');
        Assert::expect($response->http_code)->to_equal(404);
    }
}