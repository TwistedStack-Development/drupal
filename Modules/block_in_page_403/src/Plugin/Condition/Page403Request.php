<?php

namespace Drupal\block_in_page_403\Plugin\Condition;

use Drupal\Core\Condition\ConditionPluginBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Provides a 'Page 403' condition.
 *
 * @Condition(
 *   id = "page_403",
 *   label = @Translation("Page 403"),
 * )
 */
class Page403Request extends ConditionPluginBase implements ContainerFactoryPluginInterface
{

    /**
     * The request stack.
     *
     * @var \Symfony\Component\HttpFoundation\RequestStack
     */
    protected $requestStack;

    /**
     * {@inheritdoc}
     */
    public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition)
    {
        return new static(
            $container->get('request_stack'),
            $configuration,
            $plugin_id,
            $plugin_definition);
    }

    /**
     * {@inheritdoc}
     */
    public function defaultConfiguration()
    {
        return ['page_403' => ''] + parent::defaultConfiguration();
    }

    /**
     * {@inheritdoc}
     */
    public function buildConfigurationForm(array $form, FormStateInterface $form_state)
    {

        $form['prefix'] = ['#markup' => '<h5>Page 403</h5>'];
        $form['page_403'] = [
            '#type' => 'checkbox',
            '#title' => $this->t('Show in page 403'),
            '#default_value' => $this->configuration['page_403'],
        ];
        return $form + parent::buildConfigurationForm($form, $form_state);

    }

    /**
     * {@inheritdoc}
     */
    public function submitConfigurationForm(array &$form, FormStateInterface $form_state)
    {
        $this->configuration['page_403'] = $form_state->getValue('page_403');
        parent::submitConfigurationForm($form, $form_state);
    }

    /**
     * Constructs a Page 403 condition plugin.
     *
     * @param \Symfony\Component\HttpFoundation\RequestStack $request_stack
     *   The request stack.
     * @param array $configuration
     *   A configuration array containing information about the plugin instance.
     * @param string $plugin_id
     *   The plugin_id for the plugin instance.
     * @param array $plugin_definition
     *   The plugin implementation definition.
     */
    public function __construct(RequestStack $request_stack, array $configuration, $plugin_id, array $plugin_definition)
    {
        parent::__construct($configuration, $plugin_id, $plugin_definition);
        $this->requestStack = $request_stack;
    }

    /**
     * Evaluates the condition and returns TRUE or FALSE accordingly.
     *
     * @return bool
     *   TRUE if the condition has been met, FALSE otherwise.
     */
    public function evaluate()
    {
        $page_403_checked = $this->configuration['page_403'];
        if ($page_403_checked == 1) {
            $status = $this->requestStack->getCurrentRequest()->attributes->get('exception');
            if ($status && $status->getStatusCode() == 403) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return TRUE;
        }
    }

    /**
     * Provides a human readable summary of the condition's configuration.
     */
    public function summary()
    {
        if (!empty($this->configuration['negate'])) {
            return $this->t('Do not return true on the following page 403.');
        }
        return $this->t('Return true on the following page 403.');

    }

    /**
     * {@inheritdoc}
     */
    public function getCacheContexts()
    {
        $contexts = parent::getCacheContexts();
        $contexts[] = 'url.path';
        return $contexts;
    }
}
