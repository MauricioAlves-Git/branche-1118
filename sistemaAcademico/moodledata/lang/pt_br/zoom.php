<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'zoom', language 'pt_br', version '4.1'.
 *
 * @package     zoom
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountid'] = 'ID da conta Zoom';
$string['accountid_desc'] = 'ID da conta específica para a APP de autenticação OAuth.';
$string['actions'] = 'Ações';
$string['activitydate:ended'] = 'Finalizou:';
$string['activitydate:started'] = 'Iniciou:';
$string['activitydate:starts'] = 'Inicia:';
$string['addparticipant'] = 'Adicionar um participante';
$string['addparticipantgroup'] = 'Adicionar um grupo de participantes';
$string['addroom'] = 'Adicionar uma sala';
$string['addroomalert'] = 'Adicionar uma sala clicando em';
$string['addtocalendar'] = 'Adicionar ao calendário';
$string['allmeetings'] = 'Todas as reuniões';
$string['allmeetings_desc'] = 'Com esta configuração, você pode controlar se um link para a página inicial da atividade do Zoom será mostrado ou não na parte inferior de cada página de visão geral da instância da atividade. Essa configuração afeta apenas a apresentação do link nas páginas de visão geral da atividade do Zoom. Mesmo que você decida não mostrar o link nessas páginas, o usuário ainda poderá acessar a página inicial de atividades do Zoom por meio de outros links no curso.';
$string['allmeetings_disable'] = 'Desabilitar todos os links de reuniões';
$string['allmeetings_enable'] = 'Habilitar todos os links de reuniões';
$string['alternative_hosts'] = 'Hosts Alternativos';
$string['alternative_hosts_desc'] = 'Com esta configuração, você pode controlar se a opção de escolher anfitriões alternativos é mostrada aos usuários nas configurações da instância de atividade ou não. Dois tipos de widgets estão disponíveis: Um campo de entrada simples que aceita endereços de email separados por vírgulas. E um seletor de usuários com preenchimento automático que facilita a seleção de usuários que estão inscritos no curso, têm uma conta Zoom e um papel de {$a->roles}. Anfitriões alternativos que podem ter sido definidos pelo professor diretamente no Zoom, mas não podem ser selecionados no seletor de usuário do Moodle ainda são mostrados na página de visão geral da atividade e também são preservados quando uma reunião é atualizada no Moodle.';
$string['alternative_hosts_disable'] = 'Desabilita a opção de anfitriões alternativos';
$string['alternative_hosts_help'] = 'A opção de anfitrião alternativo permite agendar reuniões e designar outro usuário licenciado da mesma conta, de modo que ele possa iniciar a reunião ou o webinar em seu lugar. Este usuário receberá um e-mail informando que foi adicionado como anfitrião alternativo, com um link para iniciar a reunião. Separe vários e-mails por vírgulas (sem espaços).';
$string['alternative_hosts_inputfield'] = 'Mostrar a opção de anfitriões alternativos como um campo de texto';
$string['alternative_hosts_picker'] = 'Mostrar a opção de anfitriões alternativos como uma seleção de autocompletar';
$string['alternative_hosts_picker_help'] = 'A opção de anfitrião alternativo permite agendar reuniões e designar outro usuário licenciado da mesma conta, de modo que ele possa iniciar a reunião ou o webinar em seu lugar. Este usuário receberá um e-mail informando que foi adicionado anfitrião alternativo, com um link para iniciar a reunião.\\n\\nVocê pode escolher um ou vários anfitriões alternativos, de acordo com a necessidade.\\n\\nSe você não conseguir encontrar um usuário específico neste seletor, ele não está inscrito neste curso com uma função adequada ou não possui uma conta licenciada no Zoom.';
$string['alternative_hosts_picker_noneselected'] = 'Nenhum anfitrião alternativo selecionado';
$string['alternative_hosts_picker_placeholder'] = 'Selecionar usuário(s)';
$string['apiendpoint'] = 'Endpoint da API do Zoom';
$string['apiendpoint_desc'] = 'Escolha qual endpoint da API do Zoom a atividade do Zoom usará para se conectar. O endpoint global da API deve funcionar para todos os usuários. O endpoint da API da União Europeia (UE) destina-se apenas a usuários que possuem uma licença Zoom com a opção de provisionamento da UE. Se você não tiver certeza, use o endpoint global da API.';
$string['apiendpoint_eu'] = 'EU API Endpoint';
$string['apiendpoint_global'] = 'Global API Endpoint';
$string['apiidentifier'] = 'Identificador da API do Zoom';
$string['apiidentifier_desc'] = 'O identificador a ser usado ao fazer uma chamada para a API do Zoom';
$string['apiurl'] = 'URL da API do Zoom';
$string['audio_both'] = 'Áudio do computador e telefone';
$string['audio_telephony'] = 'Somente telefone';
$string['audio_voip'] = 'Somente áudio do computador';
$string['audiodefault'] = 'Áudio padrão';
$string['authentication'] = 'Autenticação';
$string['autorecording_cloud'] = 'Nuvem';
$string['autorecording_local'] = 'Local';
$string['autorecording_none'] = 'Nenhum';
$string['autorecording_userdefault'] = 'Use as configurações padrão do usuário do Zoom';
$string['autorecordingoptionsupdate'] = 'Atualizar opções de gravação automática';
$string['breakoutrooms'] = 'Salas simultâneas';
$string['cachedef_oauth'] = 'Cache do token para o Zoom OAuth';
$string['cachedef_zoomid'] = 'Mapeamento de ID de usuário Zoom';
$string['cachedef_zoommeetingsecurity'] = 'Configurações de segurança da reunião do Zoom, incluindo os requisitos de senha da conta';
$string['calendardescriptionURL'] = 'URL de participação na reunião: {$a}.';
$string['calendardescriptionintro'] = '\\nDescrição:\\n{\\$a}';
$string['calendariconalt'] = 'Ícone do calendário';
$string['changehost'] = 'Alterar host';
$string['clickjoin'] = 'Botão de entrada na reunião clicado';
$string['clientid'] = 'ID do cliente do Zoom';
$string['clientid_desc'] = 'ID do cliente específico para a APP de autenticação OAuth.';
$string['clientsecret'] = 'Senha do cliente do Zoom';
$string['clientsecret_desc'] = 'Senha do cliente específico para a APP de autenticação OAuth.';
$string['connectionfailed'] = 'A conexão falhou:';
$string['connectionok'] = 'A conexão está funcionando.';
$string['connectionsettings'] = 'Configurações da conexão';
$string['connectionsettings_desc'] = 'Estas configurações definem como o Moodle se conecta ao Zoom.';
$string['connectionstatus'] = 'Status da conexão';
$string['day'] = 'Dia(s)';
$string['defaultsettings'] = 'Configurações padrão do Zoom';
$string['defaultsettings_help'] = 'Essas configurações definem os padrões para todas as novas reuniões e webinars do Zoom.';
$string['deletemeetingrecordings'] = 'Excluir gravações de reuniões do Moodle';
$string['deleteroom'] = 'Excluir sala';
$string['displayfirstname'] = 'Primeiro nome apenas';
$string['displayfullname'] = 'Nome completo';
$string['displayid'] = '(id do usuário) apenas';
$string['displayidfullname'] = '(id do usuário) seguido pelo nome completo';
$string['displayleadtime'] = 'Mostrar tempo de entrada antecipada';
$string['displayleadtime_desc'] = 'Se habilitado, o tempo de entrada antecipada será exibido para os usuários. Dessa forma, os usuários são informados quando podem ingressar na reunião antes do horário de início agendado. Isso pode impedir que os usuários atualizem constantemente a página até que possam ingressar.';
$string['displayleadtime_nohideif'] = 'Observação: esta configuração só é processada se a configuração \'{$a}\' for definida com um valor maior que zero.';
$string['displaypassword'] = 'Exibir senha';
$string['displaypassword_help'] = 'Se habilitada, a senha da reunião sempre será exibida para os não organizadores.';
$string['downloadical'] = 'Baixar iCal';
$string['downloadical_desc'] = 'Com esta configuração, você pode controlar se o link para baixar um arquivo iCal para a reunião agendada será mostrado na página de visão geral da atividade. Esta configuração afeta apenas a possibilidade de baixar um arquivo iCal para ferramentas de calendário de terceiros. Independentemente dessa configuração, a atividade de reunião do Zoom adicionará uma entrada de calendário ao calendário do Moodle quando a data de início da reunião for definida.';
$string['downloadical_disable'] = 'Desabilitar download de arquivo iCal';
$string['downloadical_enable'] = 'Habilitar download de arquivo iCal';
$string['duration'] = 'Duração (em minutos)';
$string['encryptiontype'] = 'Tipo de criptografia';
$string['encryptiontype_alwaysshow'] = 'Sempre mostrar o seletor de tipo de criptografia, independentemente se o usuário pode usar criptografia de ponta a ponta ou não';
$string['encryptiontype_desc'] = 'Com essa configuração, você pode controlar se a opção de escolher a criptografia de ponta a ponta, em vez da criptografia aprimorada, é mostrada aos usuários nas configurações da instância de atividade. Esta configuração afeta apenas as configurações da instância de atividade no Moodle. Mesmo que seja mostrada sempre a opção, o usuário ainda precisará de criptografia no Zoom para finalmente habilitar a criptografia de ponta a ponta.';
$string['encryptiontype_disable'] = 'Desabilita o seletor de criptografia';
$string['encryptiontype_showonlyife2epossible'] = 'Mostrar seletor de criptografia somente se o usuário puder usar criptografia de ponta a ponta';
$string['end_date_option_after'] = 'Após';
$string['end_date_option_by'] = 'Em';
$string['end_date_option_occurrences'] = 'ocorrências';
$string['enddate'] = 'Data final';
$string['endtime'] = 'Tempo de encerramento';
$string['err_downloadicaldisabled'] = 'O download de arquivos iCal foi desativado.';
$string['err_downloadicalrecurringempty'] = 'O download do arquivo iCal desta reunião do Zoom não é possível, pois não contém ao menos uma única ocorrência.';
$string['err_downloadicalrecurringnofixed'] = 'O download do arquivo iCal desta reunião do Zoom não é possível, pois é uma reunião recorrente sem horário fixo.';
$string['err_duration_nonpositive'] = 'A duração deve ter valor positivo.';
$string['err_duration_too_long'] = 'A duração não pode exceder 150 horas.';
$string['err_end_date'] = 'A data de término da recorrência não pode estar no passado';
$string['err_end_date_before_start'] = 'A data de término da recorrência não pode ser antes da data inicial';
$string['err_invalid_password'] = 'A senha contém caracteres inválidos';
$string['err_long_timeframe'] = 'O intervalo de tempo solicitado é muito longo, mostrando os resultados do último mês no intervalo.';
$string['err_password'] = 'A senha pode conter apenas os seguintes caracteres: [a-z A-Z 0-9 @ - _ *]. Máximo de 10 caracteres.';
$string['err_password_required'] = 'É necessária uma senha.';
$string['err_repeat_monthly_interval'] = 'O maior intervalo para reuniões mensais é de 3 meses';
$string['err_repeat_weekly_interval'] = 'O maior intervalo para reuniões semanais é de 12 semanas';
$string['err_start_time_past'] = 'A data de início não pode estar no passado.';
$string['err_start_time_past_recurring'] = 'Para reuniões recorrentes, a informação da data desse campo é a data mais próxima possível para a próxima reunião. Esta data deve ser hoje ou no futuro.';
$string['err_weekly_days'] = 'Selecione o(s) dia(s) para a reunião recorrente semanal';
$string['erroraddinstance'] = 'Não é possível criar a reunião. Opções inválidas para uma reunião recorrente.';
$string['errorwebservice'] = 'Erro de serviço Web do Zoom: {$a}.';
$string['errorwebservice_badrequest'] = 'Zoom recebeu uma solicitação incorreta: {$a}';
$string['errorwebservice_notfound'] = 'O recurso não existe';
$string['export'] = 'Exportar';
$string['externaluser'] = 'Usuário externo';
$string['firstjoin'] = 'Quem pode entrar primeiro';
$string['firstjoin_desc'] = 'O mais cedo que um usuário pode entrar em uma reunião agendada (minutos antes do início).';
$string['getmeetingrecordings'] = 'Obter gravações de reuniões do Zoom';
$string['getmeetingreports'] = 'Obter relatório da reunião do Zoom';
$string['globalsettings'] = 'Configurações globais';
$string['globalsettings_desc'] = 'Estas configurações se aplicam ao plugin Reunião do Zoom como um todo.';
$string['grading_needgrade'] = 'Os seguintes participantes precisam ser avaliados manualmente porque não puderam ser identificados:\\n';
$string['grading_notenrolled'] = 'Os seguintes participantes entraram na reunião, mas não foram reconhecidos como inscritos:\\n';
$string['grading_notfound'] = 'Lista de participantes que clicaram para entrar na reunião, mas não foram reconhecidos no relatório de presentes:\\n';
$string['gradingentry'] = 'Ao entrar';
$string['gradinglink'] = 'Revisar ou atualizar notas';
$string['gradingmessagebody'] = 'Para a sessão da Reunião do Zoom: {$a->zoomurl};
<br>
Número de participantes que foram avaliados automaticamente de acordo com a duração da sua participação na reunião: {$a->graded}.
<br>
Número de participantes que já foram avaliados: {$a->alreadygraded}.
<br>
{$a->needgrade}<br>
Revise ou atualize as notas dos participantes aqui: {$a->gradeurl}
<br>
{$a->notfound}
<br>
{$a->notenrolled}';
$string['gradingmessagesubject'] = 'Notas do participante para a reunião Zoom: {$a->name}';
$string['gradingmethod'] = 'Método de avaliação';
$string['gradingmethod_heading'] = 'Opções para o método de avaliação';
$string['gradingmethod_heading_help'] = 'Escolha qual método usar ao avaliar a participação na reunião do Zoom.';
$string['gradingmethod_help'] = 'Escolha o método a ser usado ao avaliar a participação dos estudantes.<br>
Ao entrar: o estudante recebe a nota completa (nota máxima) ao ingressar na reunião pelo Moodle.<br>
Escolha o método a ser usado ao avaliar a participação dos estudantes.<br>
Ao entrar: o estudante recebe a nota completa (nota máxima) ao clicar para ingressar na reunião pelo Moodle.<br>
Duração da participação: o estudante recebe uma pontuação com base na porcentagem da sua participação na reunião, em relação à duração total.<br>
Notas sobre o método de duração da participação:<br>
- Este método requer que o nome de exibição contenha o id do usuário ou o nome completo.<br>
- Recomenda-se definir a configuração \'zoom | defaultjoinbeforehost\' como (Não) para que a duração da reunião seja precisa.<br>
- Alguns estudantes que já estiverem autenticados no cliente Zoom com detalhes que não correspondam aos do Moodle podem precisar ser avaliados manualmente após análise do relatório da reunião.';
$string['gradingperiod'] = 'Duração da participação';
$string['gradingsmallmeassage'] = 'Relatório rápido de notas do participante para {$a->name}:
<br>
Precisa de avaliação manual: {$a->number}
<br>
Participantes avaliados: {$a->graded + $a->alreadygraded}';
$string['host'] = 'Host';
$string['hostintro'] = '<a target="_blank" href="https://support.zoom.us/hc/en-us/articles/208220166">Anfitriões alternativos</a> podem iniciar reuniões do Zoom e gerenciar a Sala de Espera.';
$string['indicator:cognitivedepth'] = 'Zoom cognitivo';
$string['indicator:cognitivedepth_help'] = 'Este indicador é baseado na profundidade cognitiva alcançada pelo estudante em uma atividade de Zoom.';
$string['indicator:socialbreadth'] = 'Zoom social';
$string['indicator:socialbreadth_help'] = 'Este indicador é baseado na abrangência social alcançada pelo estudante em uma atividade de Zoom.';
$string['instanceusers'] = 'Verifique os usuários da instância';
$string['instanceusers_desc'] = 'Se Redefinir licenças estiver habilitado, verifique apenas os usuários licenciados nesta instância do Moodle. Útil para configurações em que instâncias separadas estão dividindo um único pool de licenças do Zoom.';
$string['invalid_status'] = 'Status inválido, verifique o banco de dados.';
$string['invalidscheduleuser'] = 'Você não pode agendar para um usuário específico';
$string['invitation_dialin'] = 'Padrão para a ligação telefônica';
$string['invitation_dialin_help'] = 'O padrão regex para identificar os números de discagem da reunião do Zoom.';
$string['invitation_h323'] = 'Padrão para as informações H.323';
$string['invitation_h323_help'] = 'O padrão regex para identificar as informações H.323 da reunião do Zoom. Se seus convites não contiverem elementos SIP ou H.323, defina o padrão de expressão regular correspondente para uma string vazia. Isso se aplica especialmente a servidores com debug habilitado, porque pode interromper o formato de tipos de arquivo especiais, como a exportação do iCal.';
$string['invitation_icallink'] = 'Padrão para o link do iCal';
$string['invitation_icallink_help'] = 'O padrão regex para identificar o link iCal da reunião Zoom.';
$string['invitation_invite'] = 'Padrão para a mensagem de convite';
$string['invitation_invite_help'] = 'O padrão regex para identificar a mensagem de convite para a reunião do Zoom.';
$string['invitation_joinurl'] = 'Padrão para o link de entrada';
$string['invitation_joinurl_help'] = 'O padrão regex para identificar a URL de entrada na reunião do Zoom.';
$string['invitation_onetapmobile'] = 'Padrão para acesso móvel com um toque';
$string['invitation_onetapmobile_help'] = 'O padrão regex para identificar os detalhes do acesso móvel com um toque para a reunião do Zoom.';
$string['invitation_sip'] = 'Padrão SIP';
$string['invitation_sip_help'] = 'O padrão regex para identificar as informações SIP da reunião Zoom. Se seus convites não contiverem elementos SIP ou H.323, defina o padrão de expressão regular correspondente para uma string vazia. Isso se aplica especialmente a servidores com debug habilitado, porque pode interromper o formato de tipos de arquivo especiais, como a exportação do iCal.';
$string['invitationmatchnotfound'] = 'Nenhuma correspondência encontrada no convite de Zoom para o elemento: "{$a->element}" com o padrão: "{$a->pattern}".';
$string['invitationmodificationfailed'] = 'Erro na expressão regex para o elemento de convite de zoom: "{$a->element}" com padrão: "{$a->pattern}".';
$string['invitationregex'] = 'Expressão regex e recursos para convite do Zoom';
$string['invitationregex_help'] = 'Defina os padrões regex para isolar cada parte de um convite de zoom de modo que as informações possam ser controladas pelos recursos correspondentes.';
$string['invitationregex_nohideif'] = 'Observação: os padrões regex só serão usados se a configuração \'{$a}\' estiver habilitada.';
$string['invitationregexenabled'] = 'Ativar regex e recursos para convite do Zoom.';
$string['invitationregexenabled_help'] = 'Quando ativado, o convite do Zoom mostrado na atividade será dividido em elementos usando regex e os recursos serão usados para decidir quais partes exibir para cada usuário. Consulte as capabilities: zoom/viewjoinurl e zoom/viewdialin.';
$string['invitationremoveicallink'] = 'Remover link do iCal para o convite do Zoom';
$string['invitationremoveicallink_help'] = 'Se habilitado, o link iCal que pode ser incluído na mensagem de e-mail da reunião de zoom será removido usando o padrão regex invitation_icallink.';
$string['invitationremoveinvite'] = 'Remover mensagem de convite do Zoom';
$string['invitationremoveinvite_help'] = 'Se ativado, a frase de introdução na mensagem de e-mail da reunião do Zoom será removida usando o padrão regex invitation_invite.';
$string['join'] = 'Entrar';
$string['join_meeting'] = 'Entrar na reunião';
$string['joinbeforehost'] = 'Entrar na reunião antes do mediador';
$string['joinbeforehostenable'] = 'Permitir que os participantes entrem a qualquer momento (sem o anfitrião)';
$string['joinlink'] = 'Link de entrada';
$string['jointime'] = 'Hora de entrada';
$string['leavetime'] = 'Hora de saída';
$string['licenseonjoin'] = 'Selecione esta opção se desejar que o anfitrião receba uma licença ao iniciar a reunião, <i>bem como</i> ao criá-la.';
$string['licensesettings'] = 'Configurações da licença';
$string['licensesettings_desc'] = 'Essas configurações definem como o Moodle lida com sua licença do Zoom.';
$string['licensesnumber'] = 'Número de licenças';
$string['lowlicenses'] = 'Se o número de suas licenças exceder as necessárias, então quando você criar cada nova atividade por usuário, ela receberá uma licença PRO reduzindo o status de outro usuário. A opção é ativada quando o número de licenças PRO ativas é maior que 5.';
$string['maskparticipantdata'] = 'Ocultar dados dos participantes';
$string['maskparticipantdata_help'] = 'Evitar que os dados dos participantes apareçam nos relatórios (útil para sites que mascaram os dados do participante, por exemplo, para LGPD).';
$string['media'] = 'Mídia';
$string['meeting_finished'] = 'Encerrada';
$string['meeting_invite'] = 'Informações para discagem/telefones';
$string['meeting_invite_hide'] = 'Ocultar as informações da reunião';
$string['meeting_invite_show'] = 'Mostrar o convite para a reunião';
$string['meeting_nonexistent_on_zoom'] = 'Inexistente no zoom';
$string['meeting_not_started'] = 'Não foi iniciada';
$string['meeting_started'] = 'Em progresso';
$string['meeting_time'] = 'Hora de início';
$string['meetingcapacitywarning'] = 'Aviso sobre capacidade limite da reunião';
$string['meetingcapacitywarning_desc'] = 'Com esta configuração, você pode mostrar uma notificação de aviso se houver mais participantes ativos e inscritos no curso do que a capacidade de reunião da licença Zoom. A notificação será exibida para o anfitrião (e anfitriões alternativos) na página de visão geral da atividade do Zoom. Ele recomendará que o anfitrião entre em contato com o proprietário da conta Zoom para obter uma licença Zoom maior, se necessário. Você pode alterar esta mensagem através da personalização do idioma do Moodle.';
$string['meetingcapacitywarning_disable'] = 'Desabilitar aviso sobre capacidade limite da reunião';
$string['meetingcapacitywarning_enable'] = 'Habilitar aviso sobre capacidade limite da reunião';
$string['meetingcapacitywarningbodyalthost'] = 'A licença Zoom do host desta reunião, {$a->hostname}, tem uma capacidade de <strong>{$a->meetingcapacity} participantes</strong>, mas este curso tem <strong><a href="{$a->courseparticipantsurl}">{$a->eligiblemeetingparticipants} participantes inscritos e ativos</a></strong>.';
$string['meetingcapacitywarningbodyrealhost'] = 'Sua licença do Zoom tem capacidade para <strong><a href="{$a->zoomprofileurl}" target="_blank">{$a->meetingcapacity} participantes da reunião</a></strong>, mas este curso tem <strong><a href="{$a->courseparticipantsurl}">{$a->eligiblemeetingparticipants} participantes ativos</a></strong>.';
$string['meetingcapacitywarningcontactalthost'] = 'Solicite ao anfitrião para entrar em contato com o proprietário da conta Zoom para obter uma licença de maior capacidade, se todos os participantes do curso precisarem participar da reunião.';
$string['meetingcapacitywarningcontactrealhost'] = 'Entre em contato com o proprietário da conta Zoom para obter uma licença Zoom de maior capacidade, se todos os participantes do curso precisarem participar da reunião.';
$string['meetingcapacitywarningheading'] = 'Aviso sobre capacidade da reunião:';
$string['meetingparticipantsdeleted'] = 'Dados do participante da reunião excluídos.';
$string['meetingrecordingviewsdeleted'] = 'Dados de visualização de gravação de reunião excluídos.';
$string['messageprovider:teacher_notification'] = 'Notificar os professores sobre as notas dos participantes (de acordo com a duração) em uma reunião do Zoom';
$string['modulename'] = 'Reunião do Zoom';
$string['modulename_help'] = 'O Zoom é uma plataforma de videoconferência e webconferência que oferece aos usuários autorizados a capacidade de mediar reuniões online.';
$string['modulenameplural'] = 'Reuniões do Zoom';
$string['month'] = 'Mês(es)';
$string['month_day_text'] = 'do mês';
$string['newmeetings'] = 'Novas Reuniões';
$string['nextoccurrence'] = 'Próxima ocorrência';
$string['nomeetinginstances'] = 'Nenhuma sessão encontrada para esta reunião.';
$string['nonrecognizedusergrade'] = '(Nome: {$a->userid}, nota: {$a->grade})';
$string['nooccurrenceleft'] = 'A última ocorrência já terminou';
$string['noparticipants'] = 'Nenhum participante encontrado para esta sessão neste momento.';
$string['norecordings'] = 'Nenhuma gravação encontrada para esta reunião no momento.';
$string['norooms'] = 'Nenhuma sala';
$string['nosessions'] = 'Nenhuma sessão encontrada para o intervalo especificado.';
$string['nozooms'] = 'Sem reuniões';
$string['nozoomsfound'] = 'Nenhuma reunião encontrada para este curso.';
$string['occurson'] = 'Ocorre em';
$string['off'] = 'Desligado';
$string['oldmeetings'] = 'Reuniões Encerradas';
$string['on'] = 'Ligado';
$string['option_allow_recording_change'] = 'Permitir alteração da gravação';
$string['option_allow_recording_change_help'] = 'Permitir que o usuário altere a configuração da gravação no momento da criação da atividade';
$string['option_audio'] = 'Opções de áudio';
$string['option_audio_help'] = 'Com esta opção, você pode permitir que os usuários se conectem usando apenas o telefone convencional, apenas o áudio do computador ou ambos.';
$string['option_authenticated_users'] = 'Exigir autenticação para entrar';
$string['option_authenticated_users_help'] = 'Habilitar esta opção requer que todos os participantes façam login com sua conta autorizada do Zoom para poder entrar na reunião. <em> Não </em> está relacionada com o login no Moodle.';
$string['option_auto_recording'] = 'Gravação automática';
$string['option_auto_recording_help'] = 'Ativar esta opção fará a gravação automática da reunião';
$string['option_encryption_type'] = 'Criptografia';
$string['option_encryption_type_endtoendencryption'] = 'Criptografia de ponta a ponta';
$string['option_encryption_type_enhancedencryption'] = 'Criptografia avançada';
$string['option_encryption_type_help'] = 'Com esta opção, você controla o nível de criptografia e privacidade desta reunião.\\n\\n*Criptografia avançada* significa que a chave de criptografia é armazenada na nuvem do Zoom.\\n\\n*Criptografia de ponta a ponta* significa que a chave de criptografia é armazenada em seu dispositivo local e ninguém mais pode obter sua chave de segurança, nem mesmo o Zoom.\\n\\nObserve que, ao ativar a criptografia de ponta a ponta, vários recursos não estarão disponíveis na reunião - [Veja os detalhes na documentação do Zoom](https://support.zoom.us/hc/en-us/articles/360048660871).';
$string['option_host_video'] = 'Host do vídeo';
$string['option_host_video_help'] = 'Ativar esta opção habilitará o vídeo do anfitrião ao entrar na reunião. Mesmo se você optar por desligar, o anfitrião terá a opção de iniciar seu vídeo.';
$string['option_jbh'] = 'Junte-se antes do anfitrião';
$string['option_jbh_help'] = 'Habilitar esta opção permite que os participantes entrem na reunião antes que o anfitrião entre ou quando o responsável não puder comparecer à reunião. Esta opção é mutuamente exclusiva com a opção \'Sala de espera\', portanto, selecionar uma desativará a outra.';
$string['option_mute_upon_entry'] = 'Silenciar participantes ao entrar';
$string['option_mute_upon_entry_help'] = 'A ativação dessa opção desativará automaticamente o som de todos os participantes quando eles ingressarem na reunião. Os participantes podem ativar o próprio som depois de ingressar na reunião.';
$string['option_participants_video'] = 'Vídeo dos participantes';
$string['option_participants_video_help'] = 'Ativar esta opção habilitará o vídeo dos participantes ao entrar na reunião. Mesmo se você optar por desligar, os participantes poderão ter a opção de iniciar seu vídeo durante a reunião.';
$string['option_proxyhost'] = 'Usar proxy';
$string['option_proxyhost_desc'] = 'O proxy definido aqui como \'<code>&lt;hostname&gt;:&lt;port&gt;</code>\' é usado apenas para comunicação com o Zoom. Deixe em branco para usar as configurações de proxy padrão do Moodle. Você só precisará definir isso se não quiser usar um proxy global no Moodle.';
$string['option_view_recordings'] = 'Permitir que as gravações sejam visualizadas';
$string['option_waiting_room'] = 'Sala de espera';
$string['option_waiting_room_help'] = 'Habilitar esta opção permite que o anfitrião controle quando um participante entra na reunião. Esta opção é mutuamente exclusiva com a opção \'Entrar antes do anfitrião\', portanto, selecionar uma desativará a outra.';
$string['participantdatanotavailable'] = 'Detalhes não disponíveis';
$string['participantdatanotavailable_help'] = 'Os dados de participantes não estão disponíveis para esta sessão.';
$string['participantgroups'] = 'Grupos de participantes';
$string['participants'] = 'Participantes';
$string['password'] = 'Senha';
$string['password_allowed_char'] = 'A senha pode conter os seguintes caracteres: [a-z A-Z 0-9 @ - _ *].';
$string['password_consecutive'] = 'Máximo de {$a} caracteres consecutivos (abcd, 1111, 1234, etc.).';
$string['password_length'] = 'Mínimo de {$a} caracter(es).';
$string['password_letter'] = 'A senha deve conter pelo menos 1 letra.';
$string['password_lower_upper'] = 'A senha deve incluir caracteres maiúsculos e minúsculos.';
$string['password_max_length'] = 'Máximo de 10 caracteres.';
$string['password_number'] = 'A senha deve conter pelo menos 1 número.';
$string['password_only_numeric'] = 'A senha pode conter apenas números e nenhum outro caractere.';
$string['password_special'] = 'A senha deve ter pelo menos 1 caracter especial (@ -_ *).';
$string['passwordprotected'] = 'Protegido por Senha';
$string['pluginadministration'] = 'Gerenciar reunião do Zoom';
$string['pluginname'] = 'Reunião do Zoom';
$string['privacy:metadata:zoom_breakout_participants'] = 'A tabela do banco de dados para armazenar uma lista de participantes das salas simultâneas da reunião';
$string['privacy:metadata:zoom_breakout_participants:userid'] = 'O id do usuário participante';
$string['privacy:metadata:zoom_meeting_details'] = 'A tabela do banco de dados que armazena informações sobre cada ocorrência de reunião.';
$string['privacy:metadata:zoom_meeting_details:topic'] = 'O nome da reunião da qual o usuário participou.';
$string['privacy:metadata:zoom_meeting_participants'] = 'A tabela do banco de dados que armazena informações sobre os participantes da reunião.';
$string['privacy:metadata:zoom_meeting_participants:duration'] = 'Quanto tempo o participante esteve na reunião';
$string['privacy:metadata:zoom_meeting_participants:join_time'] = 'O horário em que o participante ingressou na reunião';
$string['privacy:metadata:zoom_meeting_participants:leave_time'] = 'O horário em que o participante saiu da reunião';
$string['privacy:metadata:zoom_meeting_participants:name'] = 'O nome do participante';
$string['privacy:metadata:zoom_meeting_participants:user_email'] = 'O email do participante';
$string['privacy:metadata:zoom_meeting_view'] = 'A tabela do banco de dados para rastrear os usuários que visualizam as gravações da reunião';
$string['privacy:metadata:zoom_meeting_view:userid'] = 'O id do usuário que visualizou a gravação';
$string['recording'] = 'Gravação';
$string['recordingadd'] = 'Adicionar gravação';
$string['recordingdate'] = 'Data da gravação';
$string['recordingdelete'] = 'Tem certeza de que deseja excluir a gravação "{$a}"?';
$string['recordinghide'] = 'Ocultar gravação (atualmente visível)';
$string['recordinglink'] = 'Link da gravação';
$string['recordingname'] = 'Título';
$string['recordingnotfound'] = 'Gravação não encontrada';
$string['recordingnotvisible'] = 'A gravação não está visível. Entre em contato com o administrador do sistema se você acredita que isso é um erro';
$string['recordingpasscode'] = 'Senha da gravação';
$string['recordings'] = 'Gravações';
$string['recordingshow'] = 'Mostrar gravação (atualmente oculta)';
$string['recordingshowtoggle'] = 'Alternar Mostrar Gravação';
$string['recordingurl'] = 'URL da gravação';
$string['recordingview'] = 'Ver gravações';
$string['recordingvisibility'] = 'As gravações desta reunião são visíveis por padrão?';
$string['recordingvisibility_help'] = 'Quando novas gravações para esta reunião são buscadas, elas devem estar visíveis no Moodle por padrão?';
$string['recreatesuccessful'] = 'Reunião recriada com sucesso.';
$string['recurrence_option_daily'] = 'Diariamente';
$string['recurrence_option_monthly'] = 'Mensalmente';
$string['recurrence_option_no_time'] = 'Sem horário fixo';
$string['recurrence_option_weekly'] = 'Semanalmente';
$string['recurrencetype'] = 'Recorrência';
$string['recurringmeeting'] = 'Reunião recorrente';
$string['recurringmeeting_help'] = 'Habilitar esta opção tornará a reunião recorrente sem data ou hora de término. Ela pode então ser acessada a qualquer momento.';
$string['recurringmeetingexplanation'] = 'A reunião não tem uma data ou hora de término';
$string['recurringmeetinglong'] = 'Reunião recorrente (reunião sem data ou hora de encerramento)';
$string['recurringmeetingthisis'] = 'Esta é uma reunião recorrente';
$string['recycleonjoin'] = 'Renovar licença ao ingressar';
$string['redefinelicenses'] = 'Redefinir licenças';
$string['refreshreports'] = 'Atualizar os relatórios da sessão';
$string['register'] = 'Registro';
$string['registration'] = 'Exigir registro';
$string['registration_help'] = 'A ativação dessa opção forçará os participantes a se registrarem na reunião/webinar do Zoom antes de ingressar.';
$string['registration_text'] = 'Forçar os participantes a se registrarem na reunião/webinar';
$string['repeatinterval'] = 'Repetir a cada';
$string['report'] = 'Relatórios';
$string['reportapicalls'] = 'As chamadas da API de relatórios se esgotaram';
$string['requirepasscode'] = 'Exigir senha de reunião';
$string['requirepasscode_help'] = 'A ativação dessa opção exigirá que o organizador defina uma senha para a reunião. Os participantes que ingressarem deverão inserir isso antes de ingressar na reunião. Os participantes que entrarem na reunião a partir da atividade do Moodle não precisam inserir esta senha.';
$string['resetapicalls'] = 'Redefinir o número de chamadas de API disponíveis';
$string['resetzoomsall'] = 'Excluir todas as notas do usuário, registros de visualização e dados dos participante da reunião.';
$string['room'] = 'Sala';
$string['roomname'] = 'Nome da sala';
$string['rooms'] = 'Salas';
$string['schedule'] = 'Agenda';
$string['schedulefor'] = 'Agendar reunião para';
$string['schedulefor_help'] = 'Você pode agendar reuniões em nome de outro usuário. Como pré-requisito, este usuário deve ter atribuído a você privilégio de agendamento no Zoom. O usuário selecionado será o host da reunião e será aquele cuja licença do Zoom será usada para a reunião.';
$string['scheduleforself'] = 'Você mesmo';
$string['schedulingprivilege'] = 'Privilégio de agendamento';
$string['schedulingprivilege_desc'] = 'Com esta configuração, você pode controlar se a opção de privilégio de agendamento é mostrada aos usuários nas configurações da instância de atividade ou não. Esta configuração afeta apenas as configurações da instância de atividade do Moodle. Mesmo que você decida mostrar a opção, o usuário ainda precisará obter o privilégio de agendamento concedido por outro usuário no Zoom para finalmente agendar uma reunião para o outro usuário.';
$string['schedulingprivilege_disable'] = 'Desabilitar a opção de privilégio de agendamento';
$string['schedulingprivilege_enable'] = 'Habilitar a opção de privilégio de agendamento';
$string['search:activity'] = 'Zoom - informação de atividade';
$string['security'] = 'Segurança';
$string['selectionarea'] = 'Nenhuma seleção';
$string['sessions'] = 'Sessões';
$string['sessionsreport'] = 'Relatório das sessões';
$string['sesskeyinvalid'] = 'Sessão inválida detectada. Não é possível prosseguir.';
$string['setpasscode'] = 'Definir senha';
$string['showmedia'] = 'Mostrar seção Mídia';
$string['showmedia_help'] = 'Habilitar esta opção mostrará a seção Mídia na página de atividades da reunião.';
$string['showmediaonview'] = 'Mostrar a seção Mídia na página da reunião';
$string['showschedule'] = 'Mostrar seção Agendamento';
$string['showschedule_help'] = 'Habilitar esta opção mostrará a seção Agendamento na página de atividades da reunião.';
$string['showscheduleonview'] = 'Mostrar a seção Agendamento na página da reunião';
$string['showsecurity'] = 'Mostrar seção Segurança';
$string['showsecurity_help'] = 'Habilitar esta opção mostrará a seção Segurança na página de atividades da reunião.';
$string['showsecurityonview'] = 'Mostrar a seção Segurança na página da reunião';
$string['start'] = 'Começar';
$string['start_meeting'] = 'Começar reunião';
$string['start_time'] = 'Quando';
$string['starthostjoins'] = 'Começar o vídeo quando o mediador entrar';
$string['startpartjoins'] = 'Começar o vídeo quando o participante entrar';
$string['starttime'] = 'Hora de início';
$string['status'] = 'Status';
$string['supplementaryfeaturessettings'] = 'Configurações de recursos complementares';
$string['supplementaryfeaturessettings_desc'] = 'Essas configurações controlam se e como recursos complementares de Zoom são fornecidos aos usuários.';
$string['title'] = 'Título';
$string['topic'] = 'Tópico';
$string['trackingfields'] = 'Campos de rastreamento';
$string['trackingfields_help'] = 'Digite o(s) nome(s) do(s) campo(s) de rastreamento, separados por vírgulas, para habilitar as atividades do Zoom.';
$string['trackingfields_recommendedvalues'] = 'Valores recomendados:';
$string['unamedisplay'] = 'Usar o nome de exibição';
$string['unamedisplay_help'] = 'Como o nome de um participante deve ser exibido nas reuniões (apenas para usuários que não estão logados no cliente Zoom).';
$string['unavailable'] = 'Você não pode participar neste momento.';
$string['unavailablefinished'] = 'A reunião já terminou.';
$string['unavailablefirstjoin'] = 'Você pode entrar {$a->mins} minutos antes do horário de início agendado, no mínimo.';
$string['unavailablenotstartedyet'] = 'A reunião ainda não começou.';
$string['updatemeetings'] = 'Atualizar as configurações de reunião do Zoom';
$string['updatetrackingfields'] = 'Atualizar as configurações de monitoramento do Zoom';
$string['usepersonalmeeting'] = 'Use o ID de reunião pessoal {$a}';
$string['waitingroom'] = 'Sala de espera';
$string['waitingroomenable'] = 'Habilitar sala de espera';
$string['webinar'] = 'Webinar';
$string['webinar_already_false'] = '<p><b>Este módulo já foi definido como uma reunião, não como um webinar. Você não pode alternar essa configuração depois de criar a reunião.</b></p>';
$string['webinar_already_true'] = '<p><b>Este módulo já foi definido como um webinar, e não uma reunião. Você não pode alternar essa configuração depois de criar o webinar.</b></p>';
$string['webinar_alwaysshow'] = 'Sempre mostrar a opção de webinar, independentemente de o usuário ter uma licença para hospedar webinars';
$string['webinar_by_default'] = 'Webinar por padrão';
$string['webinar_by_default_desc'] = 'Cria um evento Zoom como webinar por padrão.';
$string['webinar_desc'] = 'Com essa configuração, você pode controlar se a opção de criar um webinar é exibida aos usuários durante a criação de uma reunião ou não. Esta configuração afeta apenas as configurações da instância de atividade do Moodle. Mesmo que você decida mostrar sempre a opção, o usuário ainda precisará de uma licença válida para webinars para finalmente hospedar um webinar.';
$string['webinar_disable'] = 'Desabilitar webinars';
$string['webinar_help'] = 'Os webinars oferecem aos hosts maior controle e flexibilidade para hospedar reuniões com públicos maiores. Esta opção está disponível apenas para contas Zoom pré-autorizadas.';
$string['webinar_showonlyiflicense'] = 'Mostrar opção de webinar somente se o usuário tiver uma licença para hospedar webinars';
$string['webinarthisis'] = 'Este é um webinar';
$string['week'] = 'Semana(s)';
$string['weekoption_first'] = 'Primeiro';
$string['weekoption_fourth'] = 'Quarto';
$string['weekoption_last'] = 'Último';
$string['weekoption_second'] = 'Segundo';
$string['weekoption_third'] = 'Terceiro';
$string['zoom:addinstance'] = 'Adicionar uma nova reunião do Zoom';
$string['zoom:eligiblealternativehost'] = 'Selecionável como host alternativo nas reuniões do Zoom';
$string['zoom:refreshsessions'] = 'Atualizar relatórios de reuniões do Zoom';
$string['zoom:view'] = 'Visualizar as reuniões do Zoom';
$string['zoom:viewdialin'] = 'Ver informações de discagem do Zoom';
$string['zoom:viewjoinurl'] = 'Visualizar URL de entrada do Zoom';
$string['zoomerr'] = 'Ocorreu um erro com o Zoom.';
$string['zoomerr_alternativehostusernotfound'] = 'O usuário {$a} não foi encontrado no Zoom.';
$string['zoomerr_apilimit'] = 'Limite máximo de taxa diária para esta API foi atingido. Tente novamente em {$a}';
$string['zoomerr_field_missing'] = '{$a} não encontrado';
$string['zoomerr_id_missing'] = 'Você deve especificar um ID do(a) course_module ou um ID de instância';
$string['zoomerr_licensesnumber_missing'] = 'Configuração máxima do Zoom encontrada, mas a configuração do número de licenças não foi encontrada';
$string['zoomerr_maxretries'] = 'Tentamos {$a->maxretries} vezes fazer a chamada, mas falhou: {$a->response}';
$string['zoomerr_meetingnotfound'] = 'Esta reunião não pode ser encontrada no Zoom. Você pode <a href="{$a->recreate}">recriá-la aqui</a> ou <a href="{$a->delete}">excluí-la completamente</a>.';
$string['zoomerr_meetingnotfound_info'] = 'Esta reunião não pode ser encontrada no Zoom. Por favor entre em contato com o mediador da reunião se você tiver dúvidas.';
$string['zoomerr_no_access_token'] = 'Nenhum token de acesso retornado';
$string['zoomerr_scopes'] = 'A configuração do Zoom OAuth não possui estes escopos obrigatórios: {$a}';
$string['zoomerr_usernotfound'] = 'Não foi possível encontrar sua conta no Zoom. Se estiver usando o Zoom pela primeira vez, você deve ativar sua conta do Zoom fazendo login em <a href="{$a}" target="_blank">{$a}</a>. Depois de ativar sua conta Zoom, recarregue esta página e continue configurando sua reunião. Caso contrário, verifique se seu e-mail no Zoom corresponde ao seu e-mail neste sistema.';
$string['zoomerr_viewrecordings_off'] = 'A tarefa Ver gravações está desativada e não pode ser executada';
$string['zoomurl'] = 'URL da página inicial do Zoom';
$string['zoomurl_desc'] = 'URL da página inicial do Zoom do proprietário da licença.';
