<section>
    <h2 class="c-heading--page" id="table">東武動物公園の詳細情報</h2>
        <div class="c-container--sm">
            <table class="c-table c-table--border c-table--sm">
                <tbody>
                    
                    <tr class="c-table__tr">
                        <th class="c-table__th c-table__th--gray c-table--left">名称</th>
                            <td class="c-table__td"><p class="c-word">{{ $facility->name }}</p></td>
                    </tr>
                    <tr class="c-table__tr">
                        <th class="c-table__th c-table__th--gray c-table--left">住所</th>
                            <td class="c-table__td">{{ $facility->address }}</td>
                    </tr>
                    <tr class="c-table__tr">
                        <th class="c-table__th c-table__th--gray c-table--left">施設内容</th>
                            <td class="c-table__td">{{ $facility->content }}</td>
                    </tr>
                     <tr class="c-table__tr">
                         <th class="c-table__th c-table__th--gray c-table--left">施設設備</th>
                            <td class="c-table__td">{{ $facility->equipment }}</td>
                    </tr>
                    <tr class="c-table__tr">
                        <th class="c-table__th c-table__th--gray c-table--left">施設料金</th>
                            <td class="c-table__td">{{ $facility->fee }}</td>
                    </tr>
                    <tr class="c-table__tr">
                        <th class="c-table__th c-table__th--gray c-table--left">施設アクセス</th>
                        <th class="c-table__th c-table__th--gray c-table--left">{{ $facility->access }}</th>
                    </tr>
</section>