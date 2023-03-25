<x-layout>
  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div class="p-6">
                  <h2 class="text-lg font-bold mb-2">欧州5大リーグ得点ランキング</h2>
                  <div class="grid">
                    <table class="min-w-full divide-y divide-gray-200">
                      <thead>
                        <tr>
                          <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">選手</th>
                          <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">リーグ</th>
                          <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">チーム</th>
                          <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ゴール数</th>
                        </tr>
                      </thead>
                      <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($players as $index => $player)
                          <tr class="{{ $index % 2 === 0 ? 'even:bg-gray-400' : 'odd:bg-white' }}">
                            <td class="px-6 py-4 whitespace-nowrap">{{ $player->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $player->league }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $player->team }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $player->goals }} goals</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</x-layout>