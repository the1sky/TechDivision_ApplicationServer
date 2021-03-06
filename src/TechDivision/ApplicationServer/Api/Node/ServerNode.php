<?php
/**
 * TechDivision\ApplicationServer\Api\Node\ServerNode
 *
 * PHP version 5
 *
 * @category   Appserver
 * @package    TechDivision_ApplicationServer
 * @subpackage Api
 * @author     Tim Wagner <tw@techdivision.com>
 * @author     Johann Zelger <jz@techdivision.com>
 * @copyright  2013 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io
 */

namespace TechDivision\ApplicationServer\Api\Node;

/**
 * DTO to transfer server information.
 *
 * @category   Appserver
 * @package    TechDivision_ApplicationServer
 * @subpackage Api
 * @author     Tim Wagner <tw@techdivision.com>
 * @author     Johann Zelger <jz@techdivision.com>
 * @copyright  2013 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io
 */
class ServerNode extends AbstractRewritesNode
{

    /**
     * The server's type
     *
     * @var string
     * @AS\Mapping(nodeType="string")
     */
    protected $type;

    /**
     * The worker to use
     *
     * @var string
     * @AS\Mapping(nodeType="string")
     */
    protected $worker;

    /**
     * The socket to use
     *
     * @var string
     * @AS\Mapping(nodeType="string")
     */
    protected $socket;

    /**
     * The server context to use
     *
     * @var string
     * @AS\Mapping(nodeType="string")
     */
    protected $serverContext;

    /**
     * The virtual hosts
     *
     * @var array
     * @AS\Mapping(nodeName="authentications/authentication", nodeType="array", elementType="TechDivision\ApplicationServer\Api\Node\AuthenticationNode")
     */
    protected $authentications;

    /**
     * The virtual hosts
     *
     * @var array
     * @AS\Mapping(nodeName="virtualHosts/virtualHost", nodeType="array", elementType="TechDivision\ApplicationServer\Api\Node\VirtualHostNode")
     */
    protected $virtualHosts;

    /**
     * The connection handlers
     *
     * @var array
     * @AS\Mapping(nodeName="connectionHandlers/connectionHandler", nodeType="array", elementType="TechDivision\ApplicationServer\Api\Node\ConnectionHandlerNode")
     */
    protected $connectionHandlers;

    /**
     * The modules
     *
     * @var array
     * @AS\Mapping(nodeName="modules/module", nodeType="array", elementType="TechDivision\ApplicationServer\Api\Node\ModuleNode")
     */
    protected $modules;

    /**
     * The file handlers
     *
     * @var array
     * @AS\Mapping(nodeName="fileHandlers/fileHandler", nodeType="array", elementType="TechDivision\ApplicationServer\Api\Node\FileHandlerNode")
     */
    protected $fileHandlers;

    /**
     * Returns the sserver's type
     *
     * @return string The server's type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Returns the worker to use for server
     *
     * @return string The worker type to use for server
     */
    public function getWorker()
    {
        return $this->worker;
    }

    /**
     * Return's the socket to use
     *
     * @return string The socket type
     */
    public function getSocket()
    {
        return $this->socket;
    }

    /**
     * Return's the server context to use
     *
     * @return string The server context type
     */
    public function getServerContext()
    {
        return $this->serverContext;
    }

    /**
     * Return's the authentications
     *
     * @return array
     */
    public function getAuthentications()
    {
        return $this->authentications;
    }

    /**
     * Return's the virtual hosts
     *
     * @return array
     */
    public function getVirtualHosts()
    {
        return $this->virtualHosts;
    }

    /**
     * Return's the connection handler nodes
     *
     * @return array
     */
    public function getConnectionHandlers()
    {
        return $this->connectionHandlers;
    }

    /**
     * Return's the file handler nodes
     *
     * @return array
     */
    public function getFileHandlers()
    {
        return $this->fileHandlers;
    }

    /**
     * Return's the module nodes
     *
     * @return array
     */
    public function getModules()
    {
        return $this->modules;
    }
}
