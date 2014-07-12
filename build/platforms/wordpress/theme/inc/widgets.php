<?php

/**
 * Class Widget Name
 *
 * This is an example widget option
 */
class widgetName extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            'widget_tickets', __('Social'), array(
                'classname'   => 'widgetSocialOption',
                'description' => __('Use this widget to add social links'),
            )
        );
    }

    public function widget($args, $instance)
    {
        ?>
        <ul id="social-links" class="list-inline">
            <?php if (!empty($instance['facebook'])): ?>
                <li>
                    <a href="<?php echo $instance['facebook'] ?>" target="_blank">
                        <i class="icon-social-facebook"></i>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
        <?php
    }

    public function update($newInstance, $instance)
    {
        $instance['facebook'] = strip_tags($newInstance['facebook']);

        return $instance;
    }

    public function form($instance)
    {
        $facebook = empty($instance['facebook']) ? '' : esc_attr($instance['facebook']);
        ?>
        <p>
            <label for="<?= esc_attr($this->get_field_id('facebook')); ?>"><?php _e('Facebook'); ?></label>
            <input id="<?= esc_attr($this->get_field_id('facebook')); ?>" name="<?= esc_attr($this->get_field_name('facebook')); ?>" type="text" value="<?= esc_attr($facebook) ?>" style="width: 100%;"/>
        </p>
    <?php
    }
}
