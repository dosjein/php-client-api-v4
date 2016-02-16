<?php 
namespace Clusterpoint\Response;

use Clusterpoint\ConnectionInterface;
use Clusterpoint\Exceptions\ClusterpointException;

interface ResponseInterface
{
    /**
     * Construct object to operate response data.
     *
     * @param  object  $raw_response
     * @param  \Clusterpoint\ConnectionInterface $connection
     * @return void
     */
    public function __construct($raw_response, ConnectionInterface $connection);

    /**
     * Returns the position of the last document that was returned
     *
     * @return int
     */
    public function to();

    /**
     * Returns the position of the first document that was returned
     *
     * @return int
     */
    public function from();

    /**
     * Returns the total number of hits - i.e. the number of documents in a storage that match the request
     *
     * @return int
     */
    public function hits();

    /**
     * Returns the left amount of documents, within the returned results.
     *
     * @return int
     */
    public function more();

    /**
     * Returns array of errors occured.
     *
     * @return array
     */
    public function error();

    /**
     * Returns the number of documents returned.
     *
     * @return int
     */
    public function found();

    /**
     * Returns the time that it took to process the request in the CPS engine
     *
     * @return float
     */
    public function seconds();

    /**
     * Returns the response JSON string.
     *
     * @return string
     */
    public function rawResponse();

    /**
     * Returns the string with executed Query.
     *
     * @return string
     */
    public function executedQuery();

    /**
     * Returns results as the array.
     *
     * @return string
     */
    public function toArray();

    /**
     * Returns results as JSON string.
     *
     * @param bool $pretty
     * @return string
     */
    public function toJSON($pretty);
}