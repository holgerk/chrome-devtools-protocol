<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Network\CanClearBrowserCacheResponse;
use ChromeDevtoolsProtocol\Model\Network\CanClearBrowserCookiesResponse;
use ChromeDevtoolsProtocol\Model\Network\CanEmulateNetworkConditionsResponse;
use ChromeDevtoolsProtocol\Model\Network\ContinueInterceptedRequestRequest;
use ChromeDevtoolsProtocol\Model\Network\DataReceivedEvent;
use ChromeDevtoolsProtocol\Model\Network\DeleteCookiesRequest;
use ChromeDevtoolsProtocol\Model\Network\EmulateNetworkConditionsRequest;
use ChromeDevtoolsProtocol\Model\Network\EnableRequest;
use ChromeDevtoolsProtocol\Model\Network\EventSourceMessageReceivedEvent;
use ChromeDevtoolsProtocol\Model\Network\GetAllCookiesResponse;
use ChromeDevtoolsProtocol\Model\Network\GetCertificateRequest;
use ChromeDevtoolsProtocol\Model\Network\GetCertificateResponse;
use ChromeDevtoolsProtocol\Model\Network\GetCookiesRequest;
use ChromeDevtoolsProtocol\Model\Network\GetCookiesResponse;
use ChromeDevtoolsProtocol\Model\Network\GetRequestPostDataRequest;
use ChromeDevtoolsProtocol\Model\Network\GetRequestPostDataResponse;
use ChromeDevtoolsProtocol\Model\Network\GetResponseBodyForInterceptionRequest;
use ChromeDevtoolsProtocol\Model\Network\GetResponseBodyForInterceptionResponse;
use ChromeDevtoolsProtocol\Model\Network\GetResponseBodyRequest;
use ChromeDevtoolsProtocol\Model\Network\GetResponseBodyResponse;
use ChromeDevtoolsProtocol\Model\Network\LoadingFailedEvent;
use ChromeDevtoolsProtocol\Model\Network\LoadingFinishedEvent;
use ChromeDevtoolsProtocol\Model\Network\ReplayXHRRequest;
use ChromeDevtoolsProtocol\Model\Network\RequestInterceptedEvent;
use ChromeDevtoolsProtocol\Model\Network\RequestServedFromCacheEvent;
use ChromeDevtoolsProtocol\Model\Network\RequestWillBeSentEvent;
use ChromeDevtoolsProtocol\Model\Network\ResourceChangedPriorityEvent;
use ChromeDevtoolsProtocol\Model\Network\ResponseReceivedEvent;
use ChromeDevtoolsProtocol\Model\Network\SearchInResponseBodyRequest;
use ChromeDevtoolsProtocol\Model\Network\SearchInResponseBodyResponse;
use ChromeDevtoolsProtocol\Model\Network\SetBlockedURLsRequest;
use ChromeDevtoolsProtocol\Model\Network\SetBypassServiceWorkerRequest;
use ChromeDevtoolsProtocol\Model\Network\SetCacheDisabledRequest;
use ChromeDevtoolsProtocol\Model\Network\SetCookieRequest;
use ChromeDevtoolsProtocol\Model\Network\SetCookieResponse;
use ChromeDevtoolsProtocol\Model\Network\SetCookiesRequest;
use ChromeDevtoolsProtocol\Model\Network\SetDataSizeLimitsForTestRequest;
use ChromeDevtoolsProtocol\Model\Network\SetExtraHTTPHeadersRequest;
use ChromeDevtoolsProtocol\Model\Network\SetRequestInterceptionRequest;
use ChromeDevtoolsProtocol\Model\Network\SetUserAgentOverrideRequest;
use ChromeDevtoolsProtocol\Model\Network\SignedExchangeReceivedEvent;
use ChromeDevtoolsProtocol\Model\Network\TakeResponseBodyForInterceptionAsStreamRequest;
use ChromeDevtoolsProtocol\Model\Network\TakeResponseBodyForInterceptionAsStreamResponse;
use ChromeDevtoolsProtocol\Model\Network\WebSocketClosedEvent;
use ChromeDevtoolsProtocol\Model\Network\WebSocketCreatedEvent;
use ChromeDevtoolsProtocol\Model\Network\WebSocketFrameErrorEvent;
use ChromeDevtoolsProtocol\Model\Network\WebSocketFrameReceivedEvent;
use ChromeDevtoolsProtocol\Model\Network\WebSocketFrameSentEvent;
use ChromeDevtoolsProtocol\Model\Network\WebSocketHandshakeResponseReceivedEvent;
use ChromeDevtoolsProtocol\Model\Network\WebSocketWillSendHandshakeRequestEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * Network domain allows tracking network activities of the page. It exposes information about http, file, data and other requests and responses, their headers, bodies, timing, etc.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface NetworkDomainInterface
{
	/**
	 * Tells whether clearing browser cache is supported.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return CanClearBrowserCacheResponse
	 */
	public function canClearBrowserCache(ContextInterface $ctx): CanClearBrowserCacheResponse;


	/**
	 * Tells whether clearing browser cookies is supported.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return CanClearBrowserCookiesResponse
	 */
	public function canClearBrowserCookies(ContextInterface $ctx): CanClearBrowserCookiesResponse;


	/**
	 * Tells whether emulation of network conditions is supported.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return CanEmulateNetworkConditionsResponse
	 */
	public function canEmulateNetworkConditions(ContextInterface $ctx): CanEmulateNetworkConditionsResponse;


	/**
	 * Clears browser cache.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function clearBrowserCache(ContextInterface $ctx): void;


	/**
	 * Clears browser cookies.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function clearBrowserCookies(ContextInterface $ctx): void;


	/**
	 * Response to Network.requestIntercepted which either modifies the request to continue with any modifications, or blocks it, or completes it with the provided response bytes. If a network fetch occurs as a result which encounters a redirect an additional Network.requestIntercepted event will be sent with the same InterceptionId.
	 *
	 * @param ContextInterface $ctx
	 * @param ContinueInterceptedRequestRequest $request
	 *
	 * @return void
	 */
	public function continueInterceptedRequest(ContextInterface $ctx, ContinueInterceptedRequestRequest $request): void;


	/**
	 * Deletes browser cookies with matching name and url or domain/path pair.
	 *
	 * @param ContextInterface $ctx
	 * @param DeleteCookiesRequest $request
	 *
	 * @return void
	 */
	public function deleteCookies(ContextInterface $ctx, DeleteCookiesRequest $request): void;


	/**
	 * Disables network tracking, prevents network events from being sent to the client.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Activates emulation of network conditions.
	 *
	 * @param ContextInterface $ctx
	 * @param EmulateNetworkConditionsRequest $request
	 *
	 * @return void
	 */
	public function emulateNetworkConditions(ContextInterface $ctx, EmulateNetworkConditionsRequest $request): void;


	/**
	 * Enables network tracking, network events will now be delivered to the client.
	 *
	 * @param ContextInterface $ctx
	 * @param EnableRequest $request
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx, EnableRequest $request): void;


	/**
	 * Returns all browser cookies. Depending on the backend support, will return detailed cookie information in the `cookies` field.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetAllCookiesResponse
	 */
	public function getAllCookies(ContextInterface $ctx): GetAllCookiesResponse;


	/**
	 * Returns the DER-encoded certificate.
	 *
	 * @param ContextInterface $ctx
	 * @param GetCertificateRequest $request
	 *
	 * @return GetCertificateResponse
	 */
	public function getCertificate(ContextInterface $ctx, GetCertificateRequest $request): GetCertificateResponse;


	/**
	 * Returns all browser cookies for the current URL. Depending on the backend support, will return detailed cookie information in the `cookies` field.
	 *
	 * @param ContextInterface $ctx
	 * @param GetCookiesRequest $request
	 *
	 * @return GetCookiesResponse
	 */
	public function getCookies(ContextInterface $ctx, GetCookiesRequest $request): GetCookiesResponse;


	/**
	 * Returns post data sent with the request. Returns an error when no data was sent with the request.
	 *
	 * @param ContextInterface $ctx
	 * @param GetRequestPostDataRequest $request
	 *
	 * @return GetRequestPostDataResponse
	 */
	public function getRequestPostData(ContextInterface $ctx, GetRequestPostDataRequest $request): GetRequestPostDataResponse;


	/**
	 * Returns content served for the given request.
	 *
	 * @param ContextInterface $ctx
	 * @param GetResponseBodyRequest $request
	 *
	 * @return GetResponseBodyResponse
	 */
	public function getResponseBody(ContextInterface $ctx, GetResponseBodyRequest $request): GetResponseBodyResponse;


	/**
	 * Returns content served for the given currently intercepted request.
	 *
	 * @param ContextInterface $ctx
	 * @param GetResponseBodyForInterceptionRequest $request
	 *
	 * @return GetResponseBodyForInterceptionResponse
	 */
	public function getResponseBodyForInterception(ContextInterface $ctx, GetResponseBodyForInterceptionRequest $request): GetResponseBodyForInterceptionResponse;


	/**
	 * This method sends a new XMLHttpRequest which is identical to the original one. The following parameters should be identical: method, url, async, request body, extra headers, withCredentials attribute, user, password.
	 *
	 * @param ContextInterface $ctx
	 * @param ReplayXHRRequest $request
	 *
	 * @return void
	 */
	public function replayXHR(ContextInterface $ctx, ReplayXHRRequest $request): void;


	/**
	 * Searches for given string in response content.
	 *
	 * @param ContextInterface $ctx
	 * @param SearchInResponseBodyRequest $request
	 *
	 * @return SearchInResponseBodyResponse
	 */
	public function searchInResponseBody(ContextInterface $ctx, SearchInResponseBodyRequest $request): SearchInResponseBodyResponse;


	/**
	 * Blocks URLs from loading.
	 *
	 * @param ContextInterface $ctx
	 * @param SetBlockedURLsRequest $request
	 *
	 * @return void
	 */
	public function setBlockedURLs(ContextInterface $ctx, SetBlockedURLsRequest $request): void;


	/**
	 * Toggles ignoring of service worker for each request.
	 *
	 * @param ContextInterface $ctx
	 * @param SetBypassServiceWorkerRequest $request
	 *
	 * @return void
	 */
	public function setBypassServiceWorker(ContextInterface $ctx, SetBypassServiceWorkerRequest $request): void;


	/**
	 * Toggles ignoring cache for each request. If `true`, cache will not be used.
	 *
	 * @param ContextInterface $ctx
	 * @param SetCacheDisabledRequest $request
	 *
	 * @return void
	 */
	public function setCacheDisabled(ContextInterface $ctx, SetCacheDisabledRequest $request): void;


	/**
	 * Sets a cookie with the given cookie data; may overwrite equivalent cookies if they exist.
	 *
	 * @param ContextInterface $ctx
	 * @param SetCookieRequest $request
	 *
	 * @return SetCookieResponse
	 */
	public function setCookie(ContextInterface $ctx, SetCookieRequest $request): SetCookieResponse;


	/**
	 * Sets given cookies.
	 *
	 * @param ContextInterface $ctx
	 * @param SetCookiesRequest $request
	 *
	 * @return void
	 */
	public function setCookies(ContextInterface $ctx, SetCookiesRequest $request): void;


	/**
	 * For testing.
	 *
	 * @param ContextInterface $ctx
	 * @param SetDataSizeLimitsForTestRequest $request
	 *
	 * @return void
	 */
	public function setDataSizeLimitsForTest(ContextInterface $ctx, SetDataSizeLimitsForTestRequest $request): void;


	/**
	 * Specifies whether to always send extra HTTP headers with the requests from this page.
	 *
	 * @param ContextInterface $ctx
	 * @param SetExtraHTTPHeadersRequest $request
	 *
	 * @return void
	 */
	public function setExtraHTTPHeaders(ContextInterface $ctx, SetExtraHTTPHeadersRequest $request): void;


	/**
	 * Sets the requests to intercept that match the provided patterns and optionally resource types.
	 *
	 * @param ContextInterface $ctx
	 * @param SetRequestInterceptionRequest $request
	 *
	 * @return void
	 */
	public function setRequestInterception(ContextInterface $ctx, SetRequestInterceptionRequest $request): void;


	/**
	 * Allows overriding user agent with the given string.
	 *
	 * @param ContextInterface $ctx
	 * @param SetUserAgentOverrideRequest $request
	 *
	 * @return void
	 */
	public function setUserAgentOverride(ContextInterface $ctx, SetUserAgentOverrideRequest $request): void;


	/**
	 * Returns a handle to the stream representing the response body. Note that after this command, the intercepted request can't be continued as is -- you either need to cancel it or to provide the response body. The stream only supports sequential read, IO.read will fail if the position is specified.
	 *
	 * @param ContextInterface $ctx
	 * @param TakeResponseBodyForInterceptionAsStreamRequest $request
	 *
	 * @return TakeResponseBodyForInterceptionAsStreamResponse
	 */
	public function takeResponseBodyForInterceptionAsStream(ContextInterface $ctx, TakeResponseBodyForInterceptionAsStreamRequest $request): TakeResponseBodyForInterceptionAsStreamResponse;


	/**
	 * Fired when data chunk was received over the network.
	 *
	 * Listener will be called whenever event Network.dataReceived is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addDataReceivedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when data chunk was received over the network.
	 *
	 * Method will block until first Network.dataReceived event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return DataReceivedEvent
	 */
	public function awaitDataReceived(ContextInterface $ctx): DataReceivedEvent;


	/**
	 * Fired when EventSource message is received.
	 *
	 * Listener will be called whenever event Network.eventSourceMessageReceived is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addEventSourceMessageReceivedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when EventSource message is received.
	 *
	 * Method will block until first Network.eventSourceMessageReceived event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return EventSourceMessageReceivedEvent
	 */
	public function awaitEventSourceMessageReceived(ContextInterface $ctx): EventSourceMessageReceivedEvent;


	/**
	 * Fired when HTTP request has failed to load.
	 *
	 * Listener will be called whenever event Network.loadingFailed is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addLoadingFailedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when HTTP request has failed to load.
	 *
	 * Method will block until first Network.loadingFailed event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return LoadingFailedEvent
	 */
	public function awaitLoadingFailed(ContextInterface $ctx): LoadingFailedEvent;


	/**
	 * Fired when HTTP request has finished loading.
	 *
	 * Listener will be called whenever event Network.loadingFinished is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addLoadingFinishedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when HTTP request has finished loading.
	 *
	 * Method will block until first Network.loadingFinished event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return LoadingFinishedEvent
	 */
	public function awaitLoadingFinished(ContextInterface $ctx): LoadingFinishedEvent;


	/**
	 * Details of an intercepted HTTP request, which must be either allowed, blocked, modified or mocked.
	 *
	 * Listener will be called whenever event Network.requestIntercepted is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addRequestInterceptedListener(callable $listener): SubscriptionInterface;


	/**
	 * Details of an intercepted HTTP request, which must be either allowed, blocked, modified or mocked.
	 *
	 * Method will block until first Network.requestIntercepted event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return RequestInterceptedEvent
	 */
	public function awaitRequestIntercepted(ContextInterface $ctx): RequestInterceptedEvent;


	/**
	 * Fired if request ended up loading from cache.
	 *
	 * Listener will be called whenever event Network.requestServedFromCache is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addRequestServedFromCacheListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired if request ended up loading from cache.
	 *
	 * Method will block until first Network.requestServedFromCache event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return RequestServedFromCacheEvent
	 */
	public function awaitRequestServedFromCache(ContextInterface $ctx): RequestServedFromCacheEvent;


	/**
	 * Fired when page is about to send HTTP request.
	 *
	 * Listener will be called whenever event Network.requestWillBeSent is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addRequestWillBeSentListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when page is about to send HTTP request.
	 *
	 * Method will block until first Network.requestWillBeSent event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return RequestWillBeSentEvent
	 */
	public function awaitRequestWillBeSent(ContextInterface $ctx): RequestWillBeSentEvent;


	/**
	 * Fired when resource loading priority is changed
	 *
	 * Listener will be called whenever event Network.resourceChangedPriority is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addResourceChangedPriorityListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when resource loading priority is changed
	 *
	 * Method will block until first Network.resourceChangedPriority event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ResourceChangedPriorityEvent
	 */
	public function awaitResourceChangedPriority(ContextInterface $ctx): ResourceChangedPriorityEvent;


	/**
	 * Fired when HTTP response is available.
	 *
	 * Listener will be called whenever event Network.responseReceived is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addResponseReceivedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when HTTP response is available.
	 *
	 * Method will block until first Network.responseReceived event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ResponseReceivedEvent
	 */
	public function awaitResponseReceived(ContextInterface $ctx): ResponseReceivedEvent;


	/**
	 * Fired when a signed exchange was received over the network
	 *
	 * Listener will be called whenever event Network.signedExchangeReceived is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addSignedExchangeReceivedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when a signed exchange was received over the network
	 *
	 * Method will block until first Network.signedExchangeReceived event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return SignedExchangeReceivedEvent
	 */
	public function awaitSignedExchangeReceived(ContextInterface $ctx): SignedExchangeReceivedEvent;


	/**
	 * Fired when WebSocket is closed.
	 *
	 * Listener will be called whenever event Network.webSocketClosed is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addWebSocketClosedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when WebSocket is closed.
	 *
	 * Method will block until first Network.webSocketClosed event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return WebSocketClosedEvent
	 */
	public function awaitWebSocketClosed(ContextInterface $ctx): WebSocketClosedEvent;


	/**
	 * Fired upon WebSocket creation.
	 *
	 * Listener will be called whenever event Network.webSocketCreated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addWebSocketCreatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired upon WebSocket creation.
	 *
	 * Method will block until first Network.webSocketCreated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return WebSocketCreatedEvent
	 */
	public function awaitWebSocketCreated(ContextInterface $ctx): WebSocketCreatedEvent;


	/**
	 * Fired when WebSocket message error occurs.
	 *
	 * Listener will be called whenever event Network.webSocketFrameError is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addWebSocketFrameErrorListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when WebSocket message error occurs.
	 *
	 * Method will block until first Network.webSocketFrameError event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return WebSocketFrameErrorEvent
	 */
	public function awaitWebSocketFrameError(ContextInterface $ctx): WebSocketFrameErrorEvent;


	/**
	 * Fired when WebSocket message is received.
	 *
	 * Listener will be called whenever event Network.webSocketFrameReceived is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addWebSocketFrameReceivedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when WebSocket message is received.
	 *
	 * Method will block until first Network.webSocketFrameReceived event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return WebSocketFrameReceivedEvent
	 */
	public function awaitWebSocketFrameReceived(ContextInterface $ctx): WebSocketFrameReceivedEvent;


	/**
	 * Fired when WebSocket message is sent.
	 *
	 * Listener will be called whenever event Network.webSocketFrameSent is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addWebSocketFrameSentListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when WebSocket message is sent.
	 *
	 * Method will block until first Network.webSocketFrameSent event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return WebSocketFrameSentEvent
	 */
	public function awaitWebSocketFrameSent(ContextInterface $ctx): WebSocketFrameSentEvent;


	/**
	 * Fired when WebSocket handshake response becomes available.
	 *
	 * Listener will be called whenever event Network.webSocketHandshakeResponseReceived is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addWebSocketHandshakeResponseReceivedListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when WebSocket handshake response becomes available.
	 *
	 * Method will block until first Network.webSocketHandshakeResponseReceived event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return WebSocketHandshakeResponseReceivedEvent
	 */
	public function awaitWebSocketHandshakeResponseReceived(ContextInterface $ctx): WebSocketHandshakeResponseReceivedEvent;


	/**
	 * Fired when WebSocket is about to initiate handshake.
	 *
	 * Listener will be called whenever event Network.webSocketWillSendHandshakeRequest is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addWebSocketWillSendHandshakeRequestListener(callable $listener): SubscriptionInterface;


	/**
	 * Fired when WebSocket is about to initiate handshake.
	 *
	 * Method will block until first Network.webSocketWillSendHandshakeRequest event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return WebSocketWillSendHandshakeRequestEvent
	 */
	public function awaitWebSocketWillSendHandshakeRequest(ContextInterface $ctx): WebSocketWillSendHandshakeRequestEvent;
}
