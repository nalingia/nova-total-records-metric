<template>
    <base-value-metric
            @selected="handleRangeSelected"
            :title="card.name"
            :value="value"
            :ranges="card.ranges"
            :prefix="prefix"
            :suffix="suffix"
            :selected-range-key="selectedRangeKey"
            :loading="loading"
    />
</template>

<script>
import { Minimum } from 'laravel-nova'
import BaseValueMetric from './BaseValueMetric';
import ValueMetric from '@/components/Metrics/ValueMetric';

export default {
    extends: ValueMetric,
    components: {
        'base-value-metric': BaseValueMetric
    },
    props: ['card'],
}
</script>