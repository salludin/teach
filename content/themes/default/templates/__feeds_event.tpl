{if $_tpl == "box"}
    <li class="col-12 col-sm-6 col-lg-6 mb-3">
        <div class="card product" style="min-height:350px; max-height:350px;">
        <div class="product-image" >
        <div class="profle-date-wrapper" style="background-color:#5e72e4; color:white;">
            {$_event['event_start_date']|date_format:"%b"}<br>{$_event['event_start_date']|date_format:"%e"}
        </div>
                <a href="{$system['system_url']}/events/{$_event['event_id']}{if $_search}?ref=qs{/if}">
                    <img alt="{$_event['event_title']}" src="{$_event['event_picture']}" />
                </a>
            </div>
            <div class="product-info">
                <a class="h6" href="{$system['system_url']}/events/{$_event['event_id']}{if $_search}?ref=qs{/if}">{$_event['event_title']}</a>
                <div>{htmlspecialchars_decode(SUBSTR($_event['event_description'], 0, 100), ENT_QUOTES)}</div>
            </div>
            <!--<div class="product-info">
                {if $_event['i_joined']['is_interested']}
                    <button type="button" class="btn btn-sm btn-primary js_uninterest-event" data-id="{$_event['event_id']}">
                        <i class="fa fa-check mr5"></i>{__("Interested")}
                    </button>
                {else}
                    <button type="button" class="btn btn-sm btn-primary js_interest-event" data-id="{$_event['event_id']}">
                        <i class="fa fa-star mr5"></i>{__("Interested")}
                    </button>
                {/if}
                <button type="button" class="btn btn-sm btn-primary js_interest-event" data-id="{$_event['event_id']}">
                        <i class="fa fa-star mr5"></i>{__("Register")}
                    </button>
            </div>-->
        </div>
    </li>
{elseif $_tpl == "list"}
    <li class="feeds-item">
        <div class="data-container {if $_small}small{/if}">
            <a class="data-avatar" href="{$system['system_url']}/events/{$_event['event_id']}{if $_search}?ref=qs{/if}">
                <img src="{$_event['event_picture']}" alt="{$_event['event_title']}">
            </a>
            <div class="data-content">
                <div class="float-right">
                    {if $_event['i_joined']['is_interested']}
                        <button type="button" class="btn btn-sm btn-primary js_uninterest-event" data-id="{$_event['event_id']}">
                            <i class="fa fa-check mr5"></i>{__("Interested")}
                        </button>
                    {else}
                        <button type="button" class="btn btn-sm btn-primary js_interest-event" data-id="{$_event['event_id']}">
                            <i class="fa fa-star mr5"></i>{__("Interested")}
                        </button>
                    {/if}
                </div>
                <div>
                    <span class="name">
                        <a href="{$system['system_url']}/events/{$_event['event_id']}{if $_search}?ref=qs{/if}">{$_event['event_title']}</a>
                    </span>
                    <div>{$_event['event_interested']} {__("Interested")}</div>
                </div>
            </div>
        </div>
    </li>
{/if}