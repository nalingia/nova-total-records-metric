<template>
    <loading-card :loading="loading" class="metric px-6 py-4 flex flex-col">
        <div class="flex mb-4 items-center">
            <h3 class="mr-3 text-base text-80 font-bold flex-fill">{{ title }}</h3>
        </div>

        <div class="flex flex-1 items-center">
          <p class="flex items-center text-6xl">
              {{ formattedValue }}
              <span v-if="suffix" class="ml-2 text-sm font-bold text-80">{{ formattedSuffix }}</span>
          </p>
        </div>
    </loading-card>
</template>

<script>
import ValueMetric from '@/components/Metrics/Base/ValueMetric';

export default {
    extends: ValueMetric,
}
</script>