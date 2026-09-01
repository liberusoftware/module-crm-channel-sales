<?php

declare(strict_types=1);

namespace Liberu\CRM\ChannelSales\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property int $opportunity_id @property string $type @property float|null $commission */
final class ChannelEvent extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_channel_events';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['commission' => 'float', 'payload' => 'array'];
    }
}
