<?php
/**
 * Allows a Process to execute more than on job on the queue before exiting
 *
 * @package		Resque/Job
 * @author		Jeff Peters <jpeters@insidesales.com>
 */
interface Resque_Job_Iterable
{
	public function shouldPerformAgain();
}
