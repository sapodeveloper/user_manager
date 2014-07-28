もし(/^メインページにアクセスする$/) do
  visit '/main'
end

ならば(/^メインページを表示する$/) do
  should have_content('ログインユーザ情報')
end

ならば(/^ログインユーザ情報を表示する$/) do
  should have_content('テストユーザ')
end