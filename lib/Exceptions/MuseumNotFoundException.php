<?
namespace Exceptions;

class MuseumNotFoundException extends AppException{
	/** @var string $message */
	protected $message = 'We couldn’t locate that museum.';
}
